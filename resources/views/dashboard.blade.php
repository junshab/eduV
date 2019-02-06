@include('header.header')

    <div class="page-container">
        @include('sidebar.sidebar') 

        <div class="page-content-wrapper">
            <div class="page-content">
                <h1>Dashboard</h1>
                @if(Auth::check())
                <p>HiiiiM</p>
            	@endif
            </div>
        </div>

    </div>

</div>

@include('footer.footer')