<!DOCTYPE html>


<html lang="en">
  <head>
    <base href="./admin">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mandir Murti Luxmi Narayan</title>
     <link href="{{asset('assets/frontend/imgs/logo/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/frontend/imgs/logo/favicon.png')}}" rel="apple-touch-icon">
    <!-- Icons-->
    <link href="{{ asset('css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <link href="{{ asset('css/flag-icon.min.css') }}" rel="stylesheet"> <!-- icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('css')

 

    <link href="{{ asset('css/coreui-chartjs.css') }}" rel="stylesheet">
  </head>



  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

      @include('dashboard.shared.nav-builder')

      @include('dashboard.shared.header')

      <div class="c-body">

        <main class="c-main">

          @yield('content') 

        </main>
        @include('dashboard.shared.footer')
      </div>
    </div>



    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('js/coreui-utils.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    @yield('javascript')
    <script>
        CKEDITOR.replace( '.editor' );
    </script>
  </body>
</html>
