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


   <section class="become-volunteer alternate" style="padding: 30px 0px;">
        <div class="auto-container">

            <div class="feature-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h3>ROCKteens : Teenagers Discipleship </h3>
                                            <div class="text" style="font-size: 20px;line-height: 2;">Teens are undergoing dramatic changes. In addition to the biological changes of puberty, they experience cognitive changes that allow them to think more abstractly. They become increasingly focused on friends. And as they seek greater independence, they often come into conflict with parents. Most get through adolescence with few problems, establishing identities and preparing for adulthood. Some, however, experience problems that lead to dropping out of school, drug use or crime.
                                            But teens need the church. If they are not meeting Jesus, then it’s a waste of time. Making them more moral, knowing the Bible or being nice people are pointless without Jesus.
                        </div>
                        </div>

                        
                    </div>
                </div>

                <!-- Image column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column wow fadeIn" style="margin-top:90px;">
                        <figure><img src="{{ asset( 'assets/front') }}/images/impact/rt1.JPG" alt=""></figure>
                    </div>
                </div>


            
            <div class="feature-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>ROCKteens has a fourfold vision.</h2>
                            <div class="text">To fulfill the Great commission by preaching the Gospel among the nations through appropriate cultural method, teaching & equipping the generation to grow with moral, spiritual and social value and moreover to the service of Christ for establishing holistic model.</div>
                        </div>

                        <div class="row clearfix">
                            <!-- Feature BLock -->
                            <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-pay"></span></div>
                                    <h3><a href="department.html">Fun</a></h3>
                                    <div class="text">It’s a place of fun and creative ideas. Teens like fun. So they will come and do fun in a good way.</div>
                                </div>
                            </div>

                             <!-- Feature BLock -->
                            <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-tshirt"></span></div>
                                    <h3><a href="department.html">Fellowship</a></h3>
                                    <div class="text">It’s a fellowship where teenagers meet God and people.Teen fellowship day in Thursday Evening. Fellowship time 2 hours. </div>
                                </div>
                            </div>

                            <!-- Feature BLock -->
                            <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-tshirt"></span></div>
                                    <h3><a href="department.html">Friendship</a></h3>
                                    <div class="text">It’s a place of friendship where teenagers will make their good friends and Jesus will be the center of their friendship.</div>
                                </div>
                            </div>

                            <!-- Feature BLock -->
                            <div class="featrue-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="flaticon-tshirt"></span></div>
                                    <h3><a href="department.html">Follow</a></h3>
                                    <div class="text">It’s a place where teenagers follow the word of God and Christ-like lifestyle.</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- Image column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column wow fadeIn" style="margin-top:226px;">
                        <figure><img src="{{ asset( 'assets/front') }}/images/impact/rt2.JPG" alt=""></figure>
                    </div>
                </div>

            

                
    </section>

   <section class="become-volunteer alternate" style="padding: 15px 0px;">
        <div class="auto-container">

            <div class="feature-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                          <div class="text" style="font-size: 20px;line-height: 2;">Age level we have decided from 10-18. This age group are not interested to go to Sunday school and on the other hand they are not allowed in youth group. So we are taking initiative as they can learn and come to Jesus in this age. We are discipleing them for 2 years. And after then they will serve for their own church and ministry.
                            Teen fellowship day in Thursday Evening. Fellowship time 2 hours. 

                        </div>
                        </div>

                        <div class="text" style="font-size: 20px;line-height: 2;">Teenagers like to be a rock star. Here we are using this name as they can get attracted by this name. But we have a different view in the basis of Bible. 

                        </div>

                        <div class="sac">
                            <ul>
                                <li><h4 style="font-size: 20px;">	Jesus is the Rock. (1 Cor. 10:4)</h4></li>
                                <li><h4 style="font-size: 20px;">	He is the corner stone. (Eph. 2:20)</h4></li>
                                <li><h4 style="font-size: 20px;">	Teenagers will be saved by the blood of Jesus. (Eph. 2:16)</h4></li>
                                <li><h4 style="font-size: 20px;">	Teens will build their life on the rock. (Word of God) not on the sand. (Mt. 7:24-27)</h4></li>
                                <li><h4 style="font-size: 20px;">	They will be new in Christ. (2 Cor. 5:17)</h4></li>
                            </ul>
                            





                        </div>
                        <div class="text" style="font-size: 20px;line-height: 2;">We have a great vision to extend this ministry all over the country. We are praying for that. We want to see that every churches of our country, they are nurturing and feeding their flocks with proper Biblical values. Manual for the teenagers are going to be published soon!</div>
                        
                    </div>


                </div>

                <!-- Image column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column wow fadeIn" style="margin-top:45px;">
                        <figure><img src="{{ asset( 'assets/front') }}/images/impact/rt3.JPG" alt=""></figure>
                    </div>
                </div>


            
            
                    

            

                
    </section> 

<!--Fun Facts Section-->
    <div class="fun-fact-section-two style-two" style="background-image: url({{ asset( 'assets/front') }}/images/impact/rt_long.jpg);">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column-two col-md-12 col-sm-12 col-xs-12 wow fadeIn">
                        <div class="inner">
                            <div class="count-box">
                                <!-- <span class="icon flaticon-heart-12"></span> -->
                                
                                <span class="counter-title" style="font-size:50px;line-height: 2;text-align: center;">‘Let the children come to me’. (Luke 18:16)</span>
                                
                            </div>
                        </div>
                    </div>

                   
                    
                </div>
            </div>
        </div>
    </div>
    <!--End Fun Facts Section-->
     <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>ROCK Teens Gallery</h2>
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