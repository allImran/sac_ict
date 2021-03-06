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

 <!-- Video Section -->
 <section class="video-section-two" style="background-image: url({{asset('assets/front')}}/images/sow/video.JPG);">
    <div class="inner-box">
        <div class="content-box">
            <h4> Welcom to School Of Worship </h4>
            <a href="{{asset('assets/front')}}/https://www.youtube.com/watch?v=6LYkFQjCkCY?0" class="link" data-fancybox="video" data-caption=""><span class="icon fa fa-play"></span></a>
        </div>
    </div>
</section>
<!-- End Video Section -->

{{--  <!-- Team Section -->
<section class="team-section-two alternate">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Meet Our Volunteers</h2>
        </div>

        <div class="row clearfix">
            <!-- Team Block Two -->
            <div class="team-block-two col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure><img src="{{asset('assets/front')}}/images/resource/team-1.jpg" alt=""></figure>
                        <ul class="social-links">
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h4 class="name"><a href="{{asset('assets/front')}}/team-single.html">Jane Mcallister</a></h4>
                        <span class="designation">Donater</span>
                        <div class="text">Operational change management inside of workflows to establish a framework. Taking seamless </div>
                        <div class="link-box">
                            <a href="{{asset('assets/front')}}/team-single.html"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Block Two -->
            <div class="team-block-two col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure><img src="{{asset('assets/front')}}/images/resource/team-2.jpg" alt=""></figure>
                        <ul class="social-links">
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h4 class="name"><a href="{{asset('assets/front')}}/team-single.html">Sandy Nattasha</a></h4>
                        <span class="designation">Founder</span>
                        <div class="text">Operational change management inside of workflows to establish a framework. Taking seamless </div>
                        <div class="link-box">
                            <a href="{{asset('assets/front')}}/team-single.html"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Block Two -->
            <div class="team-block-two col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure><img src="{{asset('assets/front')}}/images/resource/team-3.jpg" alt=""></figure>
                        <ul class="social-links">
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h4 class="name"><a href="{{asset('assets/front')}}/team-single.html">John Dou</a></h4>
                        <span class="designation">Manager</span>
                        <div class="text">Operational change management inside of workflows to establish a framework. Taking seamless </div>
                        <div class="link-box">
                            <a href="{{asset('assets/front')}}/team-single.html"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Block Two -->
            <div class="team-block-two col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="1200ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure><img src="{{asset('assets/front')}}/images/resource/team-4.jpg" alt=""></figure>
                        <ul class="social-links">
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{asset('assets/front')}}/#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="lower-content">
                        <h4 class="name"><a href="{{asset('assets/front')}}/team-single.html">Boom Morly</a></h4>
                        <span class="designation">Donater</span>
                        <div class="text">Operational change management inside of workflows to establish a framework. Taking seamless </div>
                        <div class="link-box">
                            <a href="{{asset('assets/front')}}/team-single.html"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Team Section -->  --}}

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>School of Worship Gallery</h2>
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



<!-- Why Choose Us -->
<section class="why-choose-us">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="service-column col-md-12 col-sm-12 col-xs-12">
                <div class="inner-column">    
                    <div class="sec-title">
                        <h2> School of Worship </h2>
                            <div class="text">
                               School of Worship (SOW) is a basic course that works as a praise and worship training, making choir leader and creating discipleship. We have always shared our materials with various seminary, churches and organizations. With God’s glory along with our faith, we have an office which is nationally financed. By serving in Bengal’s churches we thank our heavenly father for observing a tremendous flow of praise and worship throughout the country.
                            </div>
                            <div class="text">
                                SOW has started its journey in 2006. In 2005, on the verge of serving Holy Spirit has sowed this seed. It is significant that “School of Worship” is a unique answer of one and a half months prayer. In the painful part of ministry God’s spirit has made us realize that to bring life in the dying churches of our country it is mandatory to give appropriate learning about praise and worship. 


                            </div>
                            <div class="text">
                                Without preparing any proper manual only with a simple note in hand in 2006 we have started praise and worship training. At the very beginning 48 people has responded to the training and with immense excitement 32 students completed this training with success! From this we have understood that God wants to carry on this training in elaborated way. 
                            </div>
                    </div>

                    
                </div>
            </div>
            
            

            <!-- Info Column -->
                <div class="info-column col-md-12 col-sm-12 col-xs-12">
                   <div class="row clearfix">
                            <!-- Feature BLock -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="text">The key verse of SOW is Colossians 1:28. It says “He is the one we proclaim, admonishing and teaching everyone with all wisdom, so that we may present everyone fully mature in Christ.”</div>
                                <p>Based on this verse SOW places its importance in 4 policies.</p>
                                    
                                <div class="sac">
                                   <ul>
                                       <li >1.	<b>Proclaiming</b>: God’s glory by praise and worship (Psalms 107:22) and proclaiming Christ’s gospel.</li>
                                       <li>2.	<b>Admonishing</b>: Living in the lord (Romans 13:12-13) and give awareness to churches – the body of Christ about the practice of righteousness (1 Timothy 4:8)</li>
                                       <li>3.	<b>Teaching</b>: For building the churches using God’s word (2 Timothy 3:16-17) for giving sound doctrine (Titus 1:9 last part).</li>
                                       <li>4.   <b>Perfect in Christ</b>: Sacred living in Christ (Romans 12:2).</li>
                                       
                                   </ul>                                 
 
                                </div>
                            </div>

                           
                        </div>
                </div>
        </div>
    </div>
</section>
<!-- End Why Choose Us -->

<!-- Work Section -->
    <section class="work-section">
        <div class="inner-container">
            <div class="row clearfix">
                <!-- Work Block -->
                <div class="work-block col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
                    <div class="inner-box" style="background-image: url({{ asset( 'assets/front') }}/images/choir/found.JPG);">
                        <h3><a href="{{ asset( 'assets/front') }}/services.html">Foundational Course </a></h3>
                        <div class="text">This course is specially developed with basic level of understanding about praise & worship. Course length 3 days. In this training we lead at least 12 sessions for participants. We facilitate foundational teaching about praise & worship.After completion of this foundational course, we give a certificate for our participants.</div>
                        <div class="btn-box"><a href="{{ asset( 'assets/front') }}/services.html" class="theme-btn btn-style-three">Read More</a></div>
                    </div>
                </div>

                <!-- Work Block -->
                <div class="work-block col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box" style="background-image: url({{ asset( 'assets/front') }}/images/choir/basic.JPG);">
                        <h3><a href="{{ asset( 'assets/front') }}/services.html"> Basic course </a></h3>
                        <div class="text">This course is specially developed for churches and seminaries. Course length maximum is 5 days. In this training we lead at least 20 sessions for participants.We facilitate some basic teaching about praise & worship within these 20 sessions which will be followed from our worship manual. </div>
                        <div class="btn-box"><a href="{{ asset( 'assets/front') }}/services.html" class="theme-btn btn-style-three">Read More</a></div>
                    </div>
                </div>

                <!-- Work Block -->
                <div class="work-block col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box" style="background-image: url({{ asset( 'assets/front') }}/images/choir/disp.JPG);">
                        <h3><a href="{{ asset( 'assets/front') }}/services.html">Discipleship Course </a></h3>
                        <div class="text">Discipleship Course is the most effective course of SOW.  This course is developed for long term discipleship for being a follower and worshiper of Jesus Christ. This course content 48 sessions in 12 days and 3 days for out-reach. We nurture the whole process for discipleship within 15 days. We give a certificate for our participants.</div>
                        <div class="btn-box"><a href="{{ route( 'volunteer') }}" class="theme-btn btn-style-three">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Work Section -->


<!-- Why Choose Us -->
<section class="why-choose-us">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="service-column col-md-12 col-sm-12 col-xs-12">
                <div class="inner-column">    
                    <div class="sec-title">
                        <h2>Testimony:</h2>
                            
                            <div class="text">
                                Before receiving Jesus my life was totally different. I hadn’t much attention to religion. I was awfully envious of other’s possessions. I lied. I didn’t respect the elders. I was also unwilling to go to the church. Even I didn’t obey my pastor and teachers.I didn’t know much about Jesus, although I was involved with the church. I was mischievous in the church. 
                            </div>
                            <div class="text">
                                I received Jesus as my personal savior on the 14th September, 2011. After knowing Him I asked my dear friend Jesus to forgive me. He has relieved me from my sin and I have been born again.  
                            </div>
                            <div class="text">
                                After getting Jesus I have started my new life. I have taken Him as my friend. I am not disobedient any more. Now I go to the church regularly. I obey my pastor and teachers.   
                            </div>
                            <div class="text">
                                I read Bible daily. Now I don’t make dirty discussions any more. I thank God because after receiving Jesus as my friend He has transformed my life.   
                            </div>

                            <b>-Rania Das, Church of God, Kakina, Lalmonirhat</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Choose Us -->
<!--Clients Section-->
<section class="clients-section" style="background-image: url({{asset('assets/front')}}/images/background/10.jpg);">
    <div class="sponsors-outer">
        <!--Sponsors Carousel-->
        <ul class="sponsors-carousel owl-carousel owl-theme">
            <li class="slide-item"><figure class="image-box"><a href="{{asset('assets/front')}}/#"><img src="{{asset('assets/front')}}/images/clients/1.png" alt=""></a></figure></li>
            <li class="slide-item"><figure class="image-box"><a href="{{asset('assets/front')}}/#"><img src="{{asset('assets/front')}}/images/clients/2.png" alt=""></a></figure></li>
            <li class="slide-item"><figure class="image-box"><a href="{{asset('assets/front')}}/#"><img src="{{asset('assets/front')}}/images/clients/3.png" alt=""></a></figure></li>
            <li class="slide-item"><figure class="image-box"><a href="{{asset('assets/front')}}/#"><img src="{{asset('assets/front')}}/images/clients/4.png" alt=""></a></figure></li>
            <li class="slide-item"><figure class="image-box"><a href="{{asset('assets/front')}}/#"><img src="{{asset('assets/front')}}/images/clients/5.png" alt=""></a></figure></li>
            <li class="slide-item"><figure class="image-box"><a href="{{asset('assets/front')}}/#"><img src="{{asset('assets/front')}}/images/clients/1.png" alt=""></a></figure></li>
            <li class="slide-item"><figure class="image-box"><a href="{{asset('assets/front')}}/#"><img src="{{asset('assets/front')}}/images/clients/2.png" alt=""></a></figure></li>
            <li class="slide-item"><figure class="image-box"><a href="{{asset('assets/front')}}/#"><img src="{{asset('assets/front')}}/images/clients/3.png" alt=""></a></figure></li>
            <li class="slide-item"><figure class="image-box"><a href="{{asset('assets/front')}}/#"><img src="{{asset('assets/front')}}/images/clients/4.png" alt=""></a></figure></li>
            <li class="slide-item"><figure class="image-box"><a href="{{asset('assets/front')}}/#"><img src="{{asset('assets/front')}}/images/clients/5.png" alt=""></a></figure></li>
        </ul>
    </div>
</section>
<!--End Clients Section-->
@endsection