@extends('front.layouts.master')
@section('content')
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
             <!-- Slide 1 -->
                @foreach($sliders as $slider)
                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-{{ $loop->iteration }}" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('back/assets/img/slide/'.$slider->image) }}" data-title="Slide Title" data-transition="parallaxvertical">
                    
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('back/assets/img/slide/'.$slider->image) }}"> 
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="auto"
                    data-whitespace="normal"
                    data-fontsize="['64','40','36','24']"
                    data-width="['600','600','600','500']"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['-150','-150','-150','-180']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                       <h4>{{ $slider->title_1 }}</h4>
                    </div>

                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="auto"
                    data-whitespace="normal"
                    data-fontsize="['64','40','36','24']"
                    data-width="['600','600','600','500']"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['-50','-50','-50','-80']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                         <h3 style="font-size:40px;">{{ $slider->title_2 }}</h3>
                    </div>
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="auto"
                    data-whitespace="normal"
                    data-fontsize="['64','40','36','24']"
                    data-width="['600','600','600','500']"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['60','60','60','60']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="text">{{ $slider->body_text }}</div>
                    </div>
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="auto"
                    data-whitespace="normal"
                    data-fontsize="['64','40','36','24']"
                    data-width="['600','600','600','500']"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['160','160','190','190']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <a href="#" class="theme-btn btn-style-one"><span>Read More</span></a>
                        <a href="#" class="theme-btn btn-style-two"><span>Contact Us</span></a>
                    </div>
                </li>
                 @endforeach
            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->

 
<!-- Become Volunteer -->
    <section class="become-volunteer alternate">
        <div class="auto-container">

            <div class="feature-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Worship Missions Ethno-doxology</h2>
                            <div class="text" style="font-size: 20px;line-height: 2;">Worship made a revolt around the country since a decade. Not only this country but around the world it’s became a revolution. Initially it was limited to sing song but through the result of different researches and mission now these are being used as tools to reaching out different people, group and nations. </div>
                            <div class="text" style="font-size: 20px;line-height: 2;">The famous theologian and author John Piper said, “Missions is not the ultimate goal of the Church. Worship is. Missions exist because worship doesn’t. Worship is ultimate, not missions, because God is ultimate, not man. When this age is over, and the countless millions of the redeemed fall on their faces before the throne of God, missions will be no more. It is a temporary necessity. But worship abides forever.”</div>
                        </div>

                        
                    </div>
                </div>

                <!-- Image column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column wow fadeIn">
                        <figure><img src="{{ asset( 'assets/front') }}/images/sow/wmet.JPG" alt=""></figure>
                    </div>
                </div>

            <div class="feature-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            
                            <div class="text" style="font-size: 20px;line-height: 2;">The worship is close relationship with God. Having heart bit of God. God’s heart bit remembering us His love to all nations. Around the world out of 16,500 nations 6685 nations never reached or heard the Gospel. The remaining nations have their own languages, cultures and elements of traditions. In order to establish worship movement and glorify God, we need to understand the heart language of all remaining nations.</div>
                            <div class="text" style="font-size: 20px;line-height: 2;">Since couple of years a new word is using towards worship uprising. This is a new word in our country. The word is ethno doxology. Ethno means peoples and doxology is praise. It’s hard to hear. To make it simplify it can be considered ‘Urges the nations to make worship through their own language.’ </div>
                        </div>

                        
                    </div>
                </div>

                <!-- Image column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column wow fadeIn">
                        <figure><img src="{{ asset( 'assets/front') }}/images/sow/wmett.JPG" alt=""></figure>
                    </div>
                </div>

            

               <!--  Info Column -->
                
    </section>
    <!--End Become Volunteer -->

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Our Gallery</h2>
        </div>

        <div class="row clearfix">
            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/1.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/1.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/2.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/2.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="600ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/3.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/3.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="800ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/4.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/4.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="400ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/5.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/5.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="700ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/6.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/6.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="900ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/7.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/7.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Block -->
            <div class="gallery-block col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                <div class="image-box">
                    <div class="image">
                        <a href="{{asset('assets/front')}}/images/gallery/8.jpg" class="light-box" data-fancybox="gallery"><img src="{{asset('assets/front')}}/images/gallery/8.jpg" alt=""></a>
                    </div>
                    <div class="caption-box">    
                        <div class="content">   
                            <h3><a href="{{asset('assets/front')}}/gallery.html">Senior Care Services</a></h3>
                            <span>Senior Care</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="link-box">
            <a href="{{asset('assets/front')}}/gallery.html" class="theme-btn btn-style-four">More Gallery</a>
        </div>
    </div>
</section>
<!-- End Gallery Section -->



<!-- Video Section -->
 <section class="video-section-two" style="background-image: url({{asset('assets/front')}}/images/sow/wmevid.jpg);">
    <div class="inner-box">
        <div class="content-box">
            <h4> WME Impact</h4>
            <a href="{{asset('assets/front')}}/https://www.youtube.com/watch?v=obI0pXlfENs" class="link" data-fancybox="video" data-caption=""><span class="icon fa fa-play"></span></a>
        </div>
    </div>
</section>
<!-- End Video Section -->

@endsection