@extends('layouts.frontend')
@section('css')
<link rel="stylesheet" href="{{asset('assets/frontend/css/index.css')}}">
@endsection

@section('content')

<div id="home-slider" class="carousel slide" data-ride="carousel">
    <div class="container">
        <div class="row">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/frontend/imgs/slider/luxmi-narayan-1.jpg')}}"
                        class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/frontend/imgs/slider/luxmi-narayan.jpg')}}"
                        class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}" class="d-block w-100">
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#home-slider" data-slide-to="0" class="active"><img
                        src="{{asset('assets/frontend/imgs/slider/luxmi-narayan-1.jpg')}}" class="d-block w-100">
                </li> 
                 <li data-target="#home-slider" data-slide-to="0" class="active"><img
                        src="{{asset('assets/frontend/imgs/slider/luxmi-narayan.jpg')}}" class="d-block w-100">
                </li>
                <li data-target="#home-slider" data-slide-to="1"><img
                        src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}" class="d-block w-100"></li>
            </ol>
             <a class="carousel-control-prev" href="#home-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only d-none">Previous</span>
            </a>
            <a class="carousel-control-next" href="#home-slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only d-none">Next</span>
            </a>
        </div>
    </div>
</div>
<section id="home-abt" class="sp mt-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="mm-heading">Our Main Services</div>
                <div class="seprator"></div>
                <p>Although our temple has numerous departments performing various different services, the main focus is on the deity worship, prasadam distibution, goshala, devotee care and 24 hour hour kirtan of the holy names of the Lord, and all other functions carried out in the temple are all meant to support and encourage the betterment and success of these key services.</p>
            </div>
        </div>
    </div>
</section>
<section id="gallery-filter" class="sp">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 text-center">
                <div class="mm-heading">Gallery</div>
                <div class="seprator"></div>
                <div class="filters filter-button-group">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".webdesign">Charity</li>
                        <li data-filter=".webdev">Construction</li>
                        <li data-filter=".brand">Mandir Darshan</li>
                        <li data-filter=".video">Videos</li>
                    </ul>
                </div>
                <div class="content grid">
                <div  data-fancybox="gallery" data-src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}" class="single-content webdesign webdev grid-item">
                        <img  class="p2" src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}">
                </div>
                <div  data-fancybox="gallery" data-src="{{asset('assets/frontend/imgs/slider/luxmi-narayan.jpg')}}" class="single-content brand webdesign grid-item">
                        <img class="p2" src="{{asset('assets/frontend/imgs/slider/luxmi-narayan.jpg')}}">
                </div>
                <div  data-fancybox="gallery" data-src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}" class="single-content brand grid-item">
                        <img class="p2" src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}">
                </div>
                    <div data-fancybox="gallery" data-src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}" class="single-content webdesign grid-item">
                        <img class="p2" src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}">
                </div>
                    <div data-fancybox="gallery" data-src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}" class="single-content webdesign grid-item">
                        <img class="p2" src="{{asset('assets/frontend/imgs/gallery/g1.jpg')}}">
                </div>
                <div data-fancybox="gallery" data-src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}" class="single-content webdesign brand grid-item">
                        <img class="p2"src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}">
                </div>
                <div data-fancybox="gallery"  data-src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}" class="single-content webdesign grid-item">
                        <img class="p2" src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}">
                </div>
                <div data-fancybox="gallery"  data-src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}" class="single-content webdesign webdev grid-item">
                        <img class="p2"src="{{asset('assets/frontend/imgs/slider/slider-demo.jpg')}}">
                </div>
                <div data-fancybox="gallery"  data-fancybox="gallery" data-src="https://www.youtube.com/embed/gZllwhG_MCc" class="single-content webdesign video grid-item">
                    <iframe width="100%" src="https://www.youtube.com/embed/gZllwhG_MCc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
$(window).on('load',function(){
     $('.grid').isotope({
    itemSelector: '.grid-item',
    });
});
 $(document).ready(()=>{
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