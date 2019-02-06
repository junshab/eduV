<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\profile;
use App\user;
use App\Http\Resources\student as studentResource;//renamed as it name same as model
use App\Http\Resources\user as userResource;//renamed as it name same as model
use App\Http\Resources\profile as profileResource;//renamed as it name same as model
use DB;
use Carbon\Carbon;
use App\Jobs\userRegisterEmailJob;



class studentController extends Controller
{

    public function create(Request $request)
    {
    	$student = new student();
        $user = new user();
        $profile = new profile();

        //save to user
        $user->first_name = $request->Input('first_name');
        $user->last_name = $request->Input('last_name');
        $user->phone = $request->Input('phone');
        $user->email = $request->Input('email');
        $user->password = $request->Input('password');
        $user->email_verified = $request->Input('email_verified');
        $user->phone_verified = $request->Input('phone_verified');
        $user->role_id = $request->Input('role_id');
        $user->client_id = $request->Input('client_id');

        $userSaved = $user->save(); 

        if($userSaved){ //save to profile

            $profile->first_name = $request->Input('first_name');
            $profile->last_name = $request->Input('last_name');
            $profile->phone = $request->Input('phone');
            $profile->email = $request->Input('email');
            $profile->gender = $request->Input('gender');
            $profile->date_of_birth = Carbon::parse($request->Input('date_of_birth'))->format('Y-m-d');
            //$profile->date_of_birth = $request->Input('date_of_birth');
            $profile->image = $request->Input('image');
            $profile->blood_group = $request->Input('blood_group');
            $profile->religion = $request->Input('religion');
            $profile->mother_tongue = $request->Input('mother_tongue');
            $profile->nationality = $request->Input('nationality');
            $profile->birth_place = $request->Input('birth_place');
            $profile->marital_status = $request->Input('marital_status');
            $profile->mailing_address = $request->Input('mailing_address');
            $profile->permanent_address = $request->Input('permanent_address');
            $profile->education_id = $request->Input('education_id');
            $profile->user_id = $user->id;
            $profile->client_id = $request->Input('client_id');

            $profileSaved = $profile->save();
        }

        if($userSaved && $profileSaved){ //save to student
            $student->admission_number = $request->Input('admission_number');
            //$student->admission_date = $request->Input('admission_date');
            $student->admission_date = Carbon::parse($request->Input('admission_date'))->format('Y-m-d');
            $student->course_batch_id = $request->Input('course_batch_id');
            $student->student_category = $request->Input('student_category');
            $student->student_type = $request->Input('student_type');
            $student->student_lives_with = $request->Input('student_lives_with');
            $student->roll_number = $request->Input('roll_number');
            $student->user_id = $user->id;
            $student->profile_id = $profile->id;
            $student->client_id = $request->Input('client_id');

            $student->save();
        }

        //queue job starts
        $job = (new userRegisterEmailJob($user->email, $user->first_name, $user->last_name))->delay(Carbon::now()->addSeconds(5));
        dispatch($job);
        //queue jobs ends

    }
    public function get()
    {
    	$student = student::all();

    	return studentResource::collection($student);

    }
    public function getbyid($id)
    {
    	$student = DB::table('students')->where('id', $id)->first();

    	//to handle error if id not find
    	if($student){
    		return new studentResource($student);
    	}
    	else{
    		return response()->json(['Error' => 'No data available for this id: '.$id.''], 404);
    	}

    }
    public function update(Request $request, $id)
    {
    	$student = student::where('id', $id)->first();

    	if($student){
    		$student->course_batch_id = $request->Input('course_batch_id');
            $student->student_category = $request->Input('student_category');
            $student->student_type = $request->Input('student_type');
            $student->student_lives_with = $request->Input('student_lives_with');
            $student->roll_number = $request->Input('roll_number');
            $student->profile_id = $request->Input('profile_id');
            $student->client_id = $request->Input('client_id');

	    	$student->save();

	    	return new studentResource($student);
    	}
    	else{
    		return response()->json(['Error' => 'No data available for this id: '.$id.''], 404);
    	}

    }
    public function delete($id)
    {
    	$student = student::where('id', $id)->first();

    	//to handle error if id not find
    	if($student){
    		$student->delete();
    		return new studentResource($student);
    	}
    	else{
    		return response()->json(['Error' => 'No data available for this id: '.$id.''], 404);
    	}

    }
}
