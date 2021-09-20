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
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"     />
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
            <div class="col-md-4 text-right">    
                <div class="mm-head">Mandir Murti</div>           
            </div>
            <div class="col-md-4 text-center">
                <a href="/" class="logo-anchor"><img alt="logo" width="150" height="100%" src="{{asset('assets/frontend/imgs/logo/mandir-logo-brown3.png')}}"></a>
            </div>
            <div class="col-md-4 text-left">
                <div class="mm-head">Luxmi Narayan</div> 
            </div>
       </div>
    </nav>
</header>

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div id="footer-content">
                    <p>Mandir Murti Luxmi Narayan is devoted towards the deity worship and charities. All other functions carried out in the temple are all meant to support and encourage the betterment and success of the society.</p>
                    <p id="copy-right">Copyrights © 2021 Powered by <a href="https://wingdinginfotech.com/" class="text-dark" target="_blank">www.wingdinginfotech.com</a> . All Rights Reserved.</p>
                </div>   
            </div>
        </div>
    </div>
</footer>


 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="{{asset('assets/frontend/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@yield('script')
</body>
</html>