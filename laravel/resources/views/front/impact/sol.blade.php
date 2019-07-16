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


    <section class="become-volunteer alternate" style="padding: 15px 0px;">
        <div class="auto-container">

            <div class="feature-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                       <h2> Source of Life Worship Evening </h2>
                        </div>

                        <div class="text" style="font-size: 20px;line-height: 2;">The Biblical concept of oneness- of being one in Spirit- the unity of heart, purpose and mind is more powerful and significant than what most believers believe. So by the grace of God we have started our monthly worship service Source of Life (SOL) and it was held on Mirpur AG Church in 29th August 2014. Praise God! Worshipers from the different churches came and unite together for the beauty of God’s kingdom.
                            We have started this service for 5 purposes:

                        </div>

                        <div class="sac">
                            <ul>
                                <li><h4 style="font-size: 20px;"> ⦁   People need the lord</h4></li>
                                <li><h4 style="font-size: 20px;">⦁  Building worship community</h4></li>
                                <li><h4 style="font-size: 20px;">⦁  Return to the throne of Mercy</h4></li>
                                <li><h4 style="font-size: 20px;">⦁  Deliverance and Repentance</h4></li>
                                <li><h4 style="font-size: 20px;">⦁  Leading victorious life.</h4></li>
                            </ul>
                            





                        </div>
                        <div class="text" style="font-size: 20px;line-height: 2;">A group of volunteer and counselors are ministering people. We appreciate their willingness to serve here! More and less 100 worshipers come to our service and some of them are from different religion. We believe that anyone can come to the lord and God’s house will be the house of all nations.</div>

                        <div class="text" style="font-size: 20px;line-height: 2;">SOL will be evangelistic and the place of preparing people’s heart for the service of the Lord! It will be continued on each month’s last Monday at 6:30 pm. Come and join with us just for worship!!</div>
                        
                    </div>


                </div>

                <!-- Image column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column wow fadeIn" style="margin-top:45px;">
                        <figure><img src="{{ asset( 'assets/front') }}/images/impact/sol1.JPG" alt=""></figure>
                    </div>
                </div>
                <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column wow fadeIn" style="margin-top:45px;">
                        <figure><img src="{{ asset( 'assets/front') }}/images/impact/sol2.JPG" alt=""></figure>
                    </div>
                </div>


            
            
                    

            

                
    </section> 

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>SOL Gallery</h2>
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