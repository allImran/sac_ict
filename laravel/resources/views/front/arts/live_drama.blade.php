@extends('front.layouts.master')
@section('content')
 <!--Page Title-->
    <section class="page-title" style="background-image:url( {{asset('assets/front') }}/images/arts/livedrama.JPG);    background-size: 100% auto;">
        <div class="auto-container">
            <div class="title-box" style="margin-right: 800px;margin-bottom: 40px;">
                <h1>Live Drama</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home </a></li>
                    <li>Live Drama</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

   <!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Live Drama Gallery</h2>
        </div>
        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="Old_is_Gold">Old is Gold</button>
            <button class="btn btn-default filter-button" data-filter="2017">2017</button>
            <button class="btn btn-default filter-button" data-filter="2018">2018</button>
            <button class="btn btn-default filter-button" data-filter="2019">Latest</button>
        </div>
        <div class="row clearfix">
           @foreach($galleries as $gallery)
            
                <div class="gallery-block gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter {{$gallery->year}}">
                    
                <div class="image-box">
                    <div class="image">
                        <a href="{{ asset('back/assets/img/gallery/'.$gallery->image) }}" class="light-box" data-fancybox="gallery"><img src="{{ asset('back/assets/img/gallery/'.$gallery->image) }}" alt=""></a>
                    </div>
                <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="#">{{$gallery->heading}}</a></h3>
                            <span>{{$gallery->caption}}</span>
                        </div>
                    </div>
            </div>
            </div>
    
            
            @endforeach
    </div>
</section>
<!-- End Gallery Section -->



<!-- Video Section -->
 <section class="video-section-two" style="background-image: url({{asset('assets/front')}}/images/arts/video.JPG);">
    <div class="inner-box">
        <div class="content-box">
            <h4> Welcom to Live Drama Program </h4>
            <a href="{{asset('assets/front')}}/https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="video" data-caption=""><span class="icon fa fa-play"></span></a>
        </div>
    </div>
</section>
<!-- End Video Section -->
@endsection