@extends('layouts.base')

@section('content')

          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-primary text-center">
                  <div class="text-value-lg p-5">Home Page</div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-info text-center">
                  <div class="text-value-lg p-5">Sliders</div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-warning text-center">
                  <div class="text-value-lg p-5">Filter</div>
                  </div>
                </div>
                <!-- /.col-->
                 <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-danger text-center">
                  <div class="text-value-lg p-5">Media</div>
                  </div>
                </div>
                </div>
              <!-- /.row-->
            </div>
          </div>

@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
