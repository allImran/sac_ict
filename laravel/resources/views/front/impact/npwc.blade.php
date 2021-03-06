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
            <div class="row clearfix">
                <div class="feature-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>National Praise and Worship Conference (NPWC)</h2>
                            <div class="text"><p>In 1999, a usual day like other days; a group of friends were sitting in a tea stall and were discussing about setting a day once a week for spending some time for God. So, we decided to sit in 29th August so that we can spend some time together in praying. At that time none of us could have thought that this sitting will eventually give birth to such a movement that will change the overall lookout of worship in Bangladesh.</p>
                                <br>
                                <p> Sacrifice’ is a ministry that has taken several initiatives for impacting the nation. Amongst them initial initiative was National Praise and Worship Conference. ‘The Sacrifice Trust’ is a ministry serving this nation by worship & media last 18 years. Vision is extended by God’s grace and has a joy that God is glorifying and revealing His glory among us. ‘Sacrifice’ has been serving for worship and praising God towards to the spiritual revival throughout the country. To strengthen and moving fast this revival spirit and we thought of conducting a conference of “Praise & Worship”. In the beginning we haven’t thought that this initiative would influence people of whole country.</p>
                                <br> 

                            </div>
                        </div>
                    </div>
                </div>

                <div class="feature-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Outcome and flow of the Spirit.</h2>
                            <div class="text">In 2005, we had our first `National Praise & Worship Conference’ at Razendrapur. That was a spark of fire. This spark became flame since 2008, when we gathered at Lalmonirhat for our 2nd Naitonal Confernece. It had a tremendous outcome and flow of the Spirit. </div>
                        </div>
                    </div>
                </div>

                <!-- Image column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column wow fadeIn">
                        <figure><img src="{{ asset('assets/front') }}/images/impact/1.jpg" alt=""></figure>
                    </div>
                </div>

                <!-- Info Column -->
                
            </div>
        </div>
    </section>
    <!--End Become Volunteer -->

    <!-- Team Section -->
    <section class="team-section-two">
        <div class="title-box" style="background-image: url({{ asset('assets/front')  }}/images/impact/bg.jpg);">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <p class="text">In the light of Matthew 18:20 our 4th NPWC was held on the slogan of Fellowship, Growth and Missions. In order to make the preparation and impact we have said that “All glory belongs to God and He deserves it”. This was just a spark of worship uprising in an imperative way to build a worship community.
This is a continue process. We have a dream of seeing this in a motivational phase regarding restoring God’s glory.</p>
                </div>
                
            </div>
        </div>

        <!-- Team Box -->
        
    </section>
    <section class="become-volunteer alternate">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="feature-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">

                        <!-- Image column -->
                        <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <div class="inner-column wow fadeIn">
                                <figure><img src="{{ asset('assets/front') }}/images/impact/2.jpg" alt=""></figure>
                            </div>
                        </div>
                        <div class="feature-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                            <div class="inner-column">
                                <div class="sec-title">
                                    <div class="text">Followed by that, we continued the flow of NPWC and conducted 3rd one in 2012. That was our year of celebration. As ‘Sacrifice’ completed 12 years. This year our focus is to celebrate His name and encourage worshippers to be a missionary in their own community as every people know and confess that He is Lord! The Holy Spirit has always stimulated us to reach our goal for this conference by the inspiring of above scripture words. Our desire is to keep this decision in mind.</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>NPWC Gallery</h2>
            </div>
            <div align="center">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="Old_is_Gold">2005</button>
                <button class="btn btn-default filter-button" data-filter="2017">2008</button>
                <button class="btn btn-default filter-button" data-filter="2018">2012</button>
                <button class="btn btn-default filter-button" data-filter="2019">2016</button>
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

  @endsection