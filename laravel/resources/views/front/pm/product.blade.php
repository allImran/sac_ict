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

     <!--Shop Page Section-->
         <section class="shop-page-section">
         	<div class="auto-container">
             	<div class="row clearfix">
                 	@foreach ($albums as $album)
                         
                     
                     <album :album="{{$album}}"
                         albumlink="{{route('album.single',$album->id)}}"
                         albumimagepath='{{ asset('back/assets/img/products/'.$album->image) }}'>
                </album>
                     @endforeach
                     
                     
                 </div>
                 <!--Styled Pagination-->
                 <ul class="styled-pagination text-center">
                     <li><a href="#" class="active">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li class="next"><a href="#">Next</a></li>
                 </ul>                
                 <!--End Styled Pagination-->
                 
             </div>
         </section>
         <!--End Shop Page Section-->
@endsection