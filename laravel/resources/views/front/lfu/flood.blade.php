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


     <!--Causes List View Section-->
    <section class="causes-list-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                    <h2>Flood</h2>
                </div>
            
                <div class="row clearfix">
                
                <!--Causes Grid View Block-->
                <div class="causes-grid-block col-md-6 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="inner-box">
                        <h2><a href="causes-single.html">Blanket Distribution at Sidor</a></h2>
                        <div class="text">Since 2008 we have seen cyclone SIDR affects in Bangladesh! Many of our well-wishers have given support to help that affected people. This is one of our passions to stand beside the distress people. We already distributed 203 blankets and some general cloths and warm clothes in the ‘Shundarban forest’ area which is one of the most affected areas.</div>
                        
                    </div>
                </div>
                
                <!--Donate Box-->
                <div class="donate-box col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset( 'assets/front' ) }}/images/lfu/lfu.JPG" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="causes-single.html" class="theme-btn btn-style-two">Donate now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!--Causes Grid View Block-->
                <div class="causes-grid-block col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="600ms">
                    <div class="inner-box">
                        <h2><a href="causes-single.html">Special Program for Rickshaw Pullers</a></h2>
                        <div class="text">Since 2010, after Christmas day, we had arranged a special program for Rickshaw Pullers to share the love of God. 30 Rickshaw pullers had attended in our program at BIMS, Mirpur. We had spent a beautiful time with them. They enjoyed songs, fun, small encouraging massage and special prayer for their family. We praise God that many of our friends have extended their hand for this program.</div>
                        
                        
                    </div>
                </div>
                
                <!--Causes Grid View Block-->
                <div class="causes-grid-block col-md-6 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="inner-box">
                        <h2><a href="causes-single.html">Blanket Distribution in Winter Season</a></h2>
                        <div class="text">value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology sion along the information highway will close the loop on focusing solely on the bottom line.</div>
                        
                        
                    </div>
                </div>
                
                <!--Causes Grid View Block-->
                <div class="causes-grid-block col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="600ms">
                    <div class="inner-box">
                        <h2><a href="causes-single.html"></a></h2>
                        <div class="text">value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology sion along the information highway will close the loop on focusing solely on the bottom line.</div>
                        <div class="progress-bar">
                            <div class="bar-inner"><div class="bar progress-line" data-width="65"><div class="bar-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="85">0</span>%</div></div></div></div>
                        </div>
                        <div class="cause-info">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="price">Raised <span>$1000</span></div>
                                </div>
                                <div class="pull-right">
                                    <div class="price">Goal <span>$11000</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Causes Grid View Block-->
                <div class="causes-grid-block col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <h2><a href="causes-single.html">Home for Homeless</a></h2>
                        <div class="text">value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology sion along the information highway will close the loop on focusing solely on the bottom line.</div>
                        <div class="progress-bar">
                            <div class="bar-inner"><div class="bar progress-line" data-width="65"><div class="bar-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="85">0</span>%</div></div></div></div>
                        </div>
                        <div class="cause-info">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="price">Raised <span>$1000</span></div>
                                </div>
                                <div class="pull-right">
                                    <div class="price">Goal <span>$11000</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!--Styled Pagination-->
            <!-- <ul class="styled-pagination text-center">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#" class="active">3</a></li>
                <li class="next"><a href="#">Next</a></li>
            </ul> -->                
            <!--End Styled Pagination-->
        </div>
    </section>
    <!--End Causes List View Section-->
    
    <!-- Donation Form Two -->
    <section class="donation-form-two">
        <div class="auto-container">

            <div class="row clearfix">
                <!-- Form Column -->
                <div class="form-column col-md-12 col-sm-12 col-xs-12">
                    <!-- Donation Form -->
                    <div class="donation-form style-two middle-aligned">
                        <form  method="post" action="http://t.commonsupport.com/incles/index-2.html">
                            <div class="row clearfix">
                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <input type="radio" name="one-time" id="one-time">
                                    <label for="one-time">One Time</label>
                                    <input type="radio" name="one-time" id="recurring">
                                    <label for="recurring">Recurring</label>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <h4>I Want to Donate for</h4>
                                    <select class="custom-select-box">
                                        <option>Educated Childrens</option>
                                        <option>Educated Childrens</option>
                                        <option>Educated Childrens</option>
                                        <option>Educated Childrens</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <h4>Currency</h4>
                                    <select class="custom-select-box">
                                        <option>USD , Us dollers</option>
                                        <option>USD , Us dollers</option>
                                        <option>USD , Us dollers</option>
                                        <option>USD , Us dollers</option>
                                        <option>USD , Us dollers</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                    <h4>How much do you want to donate?</h4>
                                    <select class="custom-select-box">
                                        <option>$1200</option>
                                        <option>$1000</option>
                                        <option>$800</option>
                                        <option>$500</option>
                                        <option>$100</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12 btn-box">
                                    <button type="submit" class="theme-btn btn-style-two">Donate Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Donation Form -->

    <!-- Call To Action -->
    <section class="call-to-action" style="background-image: url(images/background/12.jpg);">
        <div class="inner-container clearfix">
            <div class="title-column pull-left">
                <span>Contact Us Now !</span>
                <h2>+ 12 123 456 789</h2>
            </div>

            <div class="btn-column pull-right">
                <a href="contact.html" class="theme-btn btn-style-three">Get In Touch</a>
            </div>
        </div>
    </section>
    <!--End Call To Action -->


    <!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2> Gallery</h2>
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
  @endsection