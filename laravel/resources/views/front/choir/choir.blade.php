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


<!-- Why Choose Us -->
<section class="why-choose-us">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="service-column col-md-12 col-sm-12 col-xs-12">
                <div class="inner-column">    
                    <div class="sec-title">
                        <h2>“Restoring God’s Glory”</h2>
                            <div class="text">
                                “Sacrifice Choir” is the Heartbeat of this ministry. Heart of Sacrifice started to beat in a small tea stall. In that regular gathering once came a thought that without wasting time why not using our talent to do something in this country for the kingdom of God. It was the time of 1999 some enthusiastic young people came together in every Monday with immense eagerness to create music and lyrics for God. There was a flow of prayer throughout the group. A strong desire was there to use our cultural talent for the glory of God.
                            </div>
                            <div class="text">
                                In 2000, when sacrifice choir established initially the thought was to release a cassette with new generations’ songs to bring the young generation back to church. When we thought of cassette at that time we had nothing. No instruments, no place, no money only we had immeasurable love and prayer that made this impossible task possible. 
                            </div>
                            <div class="text">
                                Our vision was based on Psalms 107:22 “Let them sacrifice thanks offerings and tell of his works with songs of joy”. With the inspiration of the verse our first CD came. The name of the CD was “Bohoman Srot”. After that this flow had gone on and on with several CDs like, “Badh Vanga Srot”, “Dhonno Hok Se Naam”, “Gourob Proshonsha Tomari” etc. 
                            </div>
                    </div>

                    
                </div>
            </div>
            
            <div class="feature-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Goal of Choir: </h2>
                            <div class="text"><p>It is a place of union of those people who have the intention of doing mission with songs. Choir is the body of church where everyone will work closely with one another by using their voice for God’s glory through praise and worship.</p> <br>
                                
                            </div>
                        </div>
                    </div>
            </div>
            <!-- Info Column -->
                <div class="info-column col-md-12 col-sm-12 col-xs-12">
                   <div class="row clearfix">
                            <!-- Feature BLock -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h2>Objectives of choir: </h2>
                                    <div class="text"><p>Choir always plays a vital role in doing worship of God’s people. The objectives of doing ministry with singing are:</p> <br>
                                    </div>
                                <div class="sac">
                                   <ul>
                                       <li >1.	Spreading the gospel through music.</li>
                                       <li>2.	Encouraging believers to follow the path of Christ.</li>
                                       <li>3.	Guiding believers in worship and making a place where they can use their talents.</li>
                                       <li>4.	Explaining the word of God through music. </li>
                                       
                                   </ul>                                 
 
                                </div>
                            </div>

                           
                        </div>
                </div>
        </div>
    </div>
</section>
<!-- End Why Choose Us -->




<!-- Team Section -->
<section class="team-section-two alternate">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Meet Our Choir Members</h2>
        </div>

        <div class="row clearfix">
            <!-- Team Block Two -->
            @foreach($members as $member)
            <div class="team-block-two col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure><img src="{{ asset('back/assets/img/teamMember/'.$member->photo) }}" alt=""></figure>
                        
                    </div>
                    <div class="lower-content">
                        <h4 class="name"><a href="{{asset('assets/front')}}/team-single.html">{{$member->name}}</a></h4>
                        <span class="designation">{{$member->position}}</span>
                        
                       
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<!--End Team Section -->

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Choir Gallery</h2>
        </div>
        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="Old_is_Gold">Old is Gold</button>
            <button class="btn btn-default filter-button" data-filter="2017">2017</button>
            <button class="btn btn-default filter-button" data-filter="2018">2018</button>
            <button class="btn btn-default filter-button" data-filter="2019">Latest</button>
        </div>
        <div class="row clearfix">
            <!-- Gallery Block -->
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

<!-- Event Section -->
<section class="event-section style-two">
    <div class="title-box" style="background-image: url({{asset('assets/front')}}/images/background/9.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <h2>UpComing Events</h2>
            </div>
        </div>
    </div>

    <div class="content-box">
        <div class="auto-container">
            <div class="event-carousel owl-carousel owl-theme">
                <!-- Evend Block -->
                <div class="event-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="{{asset('assets/front')}}/event-single.html"><img src="{{asset('assets/front')}}/images/resource/event-9.jpg" alt=""></a></div>
                            <span class="date"><strong>04</strong>May</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><i class="fa fa-clock-o"></i>at 5.00 pm - 7.30 pm</li>
                                <li><i class="fa fa-map-marker"></i>25 Newyork City</li>
                            </ul>
                            <h3><a href="{{asset('assets/front')}}/event-single.html">Let ‘s walk the Genuine Care Wins</a></h3>
                        </div>
                    </div>
                </div>

                <!-- Evend Block -->
                <div class="event-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="{{asset('assets/front')}}/event-single.html"><img src="{{asset('assets/front')}}/images/resource/event-10.jpg" alt=""></a></div>
                            <span class="date"><strong>04</strong>May</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><i class="fa fa-clock-o"></i>at 5.00 pm - 7.30 pm</li>
                                <li><i class="fa fa-map-marker"></i>25 Newyork City</li>
                            </ul>
                            <h3><a href="{{asset('assets/front')}}/event-single.html">The support of Elder Care coordinator</a></h3>
                        </div>
                    </div>
                </div>

                <!-- Evend Block -->
                <div class="event-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="{{asset('assets/front')}}/event-single.html"><img src="{{asset('assets/front')}}/images/resource/event-11.jpg" alt=""></a></div>
                            <span class="date"><strong>04</strong>May</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><i class="fa fa-clock-o"></i>at 5.00 pm - 7.30 pm</li>
                                <li><i class="fa fa-map-marker"></i>25 Newyork City</li>
                            </ul>
                            <h3><a href="{{asset('assets/front')}}/event-single.html">Donate from poor Senior Citizen</a></h3>
                        </div>
                    </div>
                </div>

                <!-- Evend Block -->
                <div class="event-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><a href="{{asset('assets/front')}}/event-single.html"><img src="{{asset('assets/front')}}/images/resource/event-10.jpg" alt=""></a></div>
                            <span class="date"><strong>04</strong>May</span>
                        </div>
                        <div class="lower-content">
                            <ul class="info">
                                <li><i class="fa fa-clock-o"></i>at 5.00 pm - 7.30 pm</li>
                                <li><i class="fa fa-map-marker"></i>25 Newyork City</li>
                            </ul>
                            <h3><a href="{{asset('assets/front')}}/event-single.html">The support of Elder Care coordinator</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="link-box">
                <a href="{{asset('assets/front')}}/event-single.html" class="theme-btn btn-style-four">More Event</a>
            </div>
        </div>
    </div>
</section>
<!--End Event Section -->

 <!-- Video Section -->
 <section class="video-section-two" style="background-image: url({{asset('assets/front')}}/images/choir/video.JPG);">
    <div class="inner-box">
        <div class="content-box">
            <h4> Welcome to Sacrifice Choir <br> Since 2000</h4>

            <a href="{{asset('assets/front')}}/https://www.youtube.com/watch?v=Cr7pbRvet-8" class="link" data-fancybox="video" data-caption=""><span class="icon fa fa-play"></span></a>
        </div>
    </div>
</section>
<!-- End Video Section -->


@endsection