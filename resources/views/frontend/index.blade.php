@extends('layouts.frontend')
@section('css')
<link rel="stylesheet" href="{{asset('assets/frontend/css/index.css')}}">
@endsection

@section('content')

<div id="homeSlider" class="carousel slide" data-ride="carousel">
        <div class="row">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}"
                        class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}" class="d-block w-100">
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#homeSlider" data-slide-to="0" class="active"><img
                        src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}" class="d-block w-100">
                </li>
                <li data-target="#homeSlider" data-slide-to="1"><img
                        src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}" class="d-block w-100"></li>
            </ol>
             <a class="carousel-control-prev" href="#homeSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#homeSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</div>
<section id="home-abt" class="sp">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>What is Lorem Ipsum?</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
</section>
<section id="gallery-filter" class="sp">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="filters filter-button-group">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".webdesign">Filter 1</li>
                        <li data-filter=".webdev">Filter 2</li>
                        <li data-filter=".brand">Filter 3</li>
                    </ul>
                </div>
                <div class="content grid">
                <div class="single-content webdesign webdev grid-item">
                        <img class="p2" src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}">
                </div>
                <div class="single-content brand webdesign grid-item">
                        <img class="p2" src="{{asset('assets/frontend/imgs/gallery/g1.jpg')}}">
                </div>
                <div class="single-content brand grid-item">
                        <img class="p2" src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}">
                </div>
                    <div class="single-content webdesign grid-item">
                        <img class="p2" src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}">
                </div>
                    <div class="single-content webdesign grid-item">
                        <img class="p2" src="{{asset('assets/frontend/imgs/gallery/g1.jpg')}}">
                </div>
                <div class="single-content webdesign brand grid-item">
                        <img class="p2"src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}">
                </div>
                <div class="single-content webdesign grid-item">
                        <img class="p2" src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}">
                </div>
                <div class="single-content webdesign webdev grid-item">
                        <img class="p2"src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}">
                </div>
        </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script>
 $(document).ready(()=>{
     $('.grid').isotope({
    itemSelector: '.grid-item',
    });

    // filter items on button click
        $('.filter-button-group').on( 'click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $('.grid').isotope({ filter: filterValue });
        $('.filter-button-group li').removeClass('active');
        $(this).addClass('active');
    });

 });
</script>
@endsection