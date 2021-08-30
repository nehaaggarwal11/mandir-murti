 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @yield('meta_tags')
    <!-- Favicons -->
    <link href="{{asset('assets/frontend/imgs/logo/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/frontend/imgs/logo/favicon.png')}}" rel="apple-touch-icon">
    <!--------- CSS ------->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
     @yield('css')
    <!------- JS ---------->
    
</head>
<body>
<header>
    <section class="navBar">
       <div class="row">
            <div class="col-md-4">               
            </div>
            <div class="col-md-4 text-center">
                <img alt="logo" class="img-fluid" width="110" height="119" src="{{asset('assets/frontend/imgs/logo/logo.png')}}">
            </div>
            <div class="col-md-4">

            </div>
       </div>
    </section>
</header>

@yield('content')

<script src="{{ asset('js/app.js') }}" ></script>
 @yield('script')
</body>
</html>