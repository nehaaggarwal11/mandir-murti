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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
     @yield('css')
    <!------- JS ---------->
    <script  src="https://code.jquery.com/jquery-3.6.0.min.js"  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- <script src="/js/app.js"></script> --}}
</head>
<body>
<header>
    <nav class="navBar">
       <div class="row">
            <div class="col-md-4">               
            </div>
            <div class="col-md-4 text-center">
                <img alt="logo" class="img-fluid" width="110" height="119" src="{{asset('assets/frontend/imgs/logo/logo.png')}}">
            </div>
            <div class="col-md-4">

            </div>
       </div>
    </nav>
</header>

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">               
            </div>
            <div class="col-md-4 text-center">
                <img alt="logo" class="img-fluid" width="110" height="119" src="{{asset('assets/frontend/imgs/logo/logo.png')}}">
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</footer>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@yield('script')
</body>
</html>