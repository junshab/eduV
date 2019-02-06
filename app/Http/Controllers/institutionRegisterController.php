<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\institution;
use App\Http\Resources\institution as institutionResource;//renamed as it name same as model
use DB;
use Carbon\Carbon;
use App\Jobs\institutionRegisterEmailJob;

class institutionRegisterController extends Controller
{
    public function create(Request $request)
    {
    	$institution = new institution();

        //save to institution
        $institution->institution_name = $request->Input('institution_name');
        $institution->institution_type = $request->Input('institution_type');
        $institution->address_id = $request->Input('address_id');
        $institution->email = $request->Input('email');
        $institution->phone = $request->Input('phone');
        $institution->logo = $request->Input('logo');
        //$institution->phone_verified = $request->Input('phone_verified');
        //$institution->email_verified = $request->Input('email_verified');

        $institution->phone_otp = mt_rand(1000, 9999);

        $institutionSaved = $institution->save(); 

        $verifyPhone = verify($institution->phone);

        if($institutionSaved){ //save to profile
        	//queue job starts
	        $job = (new institutionRegisterEmailJob($institution->email, $institution->institution_name))->delay(Carbon::now()->addSeconds(5));
	        dispatch($job);
	        //queue jobs ends

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://api.karix.io/message/');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"destination\": [\"".$institution->phone."\"], \n\"source\": \"+917356062776\", \n\"text\": \"Your OTP is " .$institution->phone_otp."\"}");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_USERPWD, 'f9bfab01-71d6-4643-8fc3-56c1f2dca254' . ':' . '34487d08-51d9-4446-be93-1fa6a6851b11');

            $headers = array();
            $headers[] = 'Content-Type: application/json';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close ($ch);

        }
    }

    public function verify(Request $request, $institutionPhone)
    {
        $institutionPhone = $institutionPhone;
        $otp = $request->Input('otp');

        $institution = institution::where('phone', $institutionPhone)
                                            ->where('phone_otp', $otp)->first();

                        //return response()->json([$institution],200);
        if($institution){
            $institution->update(['phone_verified' => true, 'phone_otp'=>NULL]);
            return new institutionResource($institution);
        }

        else{
            return response()->json(['Error' => 'No data available for this id: '.$id.''], 404);
        }

    }
}
