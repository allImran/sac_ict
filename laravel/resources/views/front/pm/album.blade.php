@extends('front.layouts.master')
@section('content')
     <div class="shop-single-section">
        <div class="auto-container">
            
            <!--Shop Single-->
            <div class="shop-page product-details">
                
                <!--Basic Details-->
                <div class="basic-details">
                    <div class="row clearfix">
                    
                        <div class="image-column col-md-5 col-sm-12 col-xs-12">
                            <div class="carousel-outer">
        
                                <ul class="image-carousel owl-carousel owl-theme">
                                    <li><a href="{{ asset('back/assets/img/products/'.$album->image) }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('back/assets/img/products/'.$album->image) }}" alt=""></a></li>
                                    <li><a href="{{ asset('back/assets/img/products/'.$album->image) }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('back/assets/img/products/'.$album->image) }}" alt=""></a></li>
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="{{ asset('back/assets/img/products/'.$album->image) }}" alt=""></li>
                                </ul>
                                
                            </div>
                        </div>
                        
                        <!--Info Column-->
                        <div class="info-column col-md-7 col-sm-12 col-xs-12">
                            <div class="inner-column">
                                <h3>{{ $album->title }}</h3>
                                {{--  <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half"></span></div>  --}}
                                <!--reviews-->
                                {{--  <div class="reviews">
                                     <a href="{{ asset( 'assets/front') }}/#"> (3 customer reviews)</a>
                                </div>  --}}
                                <div class="item-price"> {{ $album->price }} Tk.</div>
                                <div class="perfect">Production: {{ $album->production }}</div>
                                {{--  <ul class="product-tag">
                                    <li><strong>SKU</strong> woo-beanie</li>
                                    <li><strong>Category</strong> Accessories</li>
                                    <li><strong>Tags</strong> business, Art, School</li>
                                </ul>  --}}
                                 
                                
                                @foreach ($album->song as $song)
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                        <p>Name: {{ $song->title }}</p>
                                        <span>Artist: {{ $song->artist }}</span> |
                                        <span>Lyricist: {{ $song->lyricist }}</span>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <audio id="player" class="player" controls ontimeupdate="myFunction(this)" controlsList="nodownload">
                                        <source src="{{ asset('back/assets/img/products/album/'.$song->audio) }}" type="audio/mp3" />
                                        
                                    </audio>
                                    </div>
                                    </div>

                                    
                                @endforeach

                                <div class="other-options">
                                    <div class="item-quantity"><input class="quantity-spinner" type="text" value="2" name="quantity"></div>
                                    <a href="{{ asset( 'assets/front') }}/#" class="theme-btn btn-style-one">Add To Cart</a>
                                    <a href="{{ route('cart.download',$album->id) }}" class="theme-btn btn-style-one">Download</a>
                                </div>
                            
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
                
            {{-- <!--Product Info Tabs-->
            <div class="product-info-tabs">
                <!--Product Tabs-->
                <div class="prod-tabs tabs-box">
                
                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#prod-details" class="tab-btn active-btn">Description</li>
                        <li data-tab="#prod-info" class="tab-btn">Additional information</li>
                        <li data-tab="#prod-reviews" class="tab-btn">Reviews (2)</li>
                    </ul>
                    
                    <!--Tabs Container-->
                    <div class="tabs-content">
                        
                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="prod-details">
                            <div class="content">
                                <p>Globally incubate standards compliant  the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical architectures..Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration. Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                            </div>
                        </div>
                        
                        <!--Tab-->
                        <div class="tab" id="prod-info">
                            <div class="content">
                                <p>Globally incubate standards compliant  the deliverables whereas web-enabled applications. and-mortar catalysts for changbefore vertical architectures..Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration. Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C.</p>
                            </div>
                        </div>
                        
                        <!--Tab-->
                        <div class="tab" id="prod-reviews">
                            <div class="content">
                                <!--Reviews Container-->
                                <div class="reviews-container">
                                    
                                    <!--Reviews-->
                                    <article class="review-box clearfix">
                                        <figure class="rev-thumb"><img src="{{ asset( 'assets/front') }}/images/resource/author-1.jpg" alt=""></figure>
                                        <div class="rev-content">
                                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span></div>
                                            <div class="rev-info">Admin – April 03, 2016: </div>
                                            <div class="rev-text"><p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p></div>
                                        </div>
                                    </article>
                                    
                                    <article class="review-box clearfix">
                                        <figure class="rev-thumb"><img src="{{ asset( 'assets/front') }}/images/resource/author-2.jpg" alt=""></figure>
                                        <div class="rev-content">
                                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span></div>
                                            <div class="rev-info">Ahsan – April 01, 2016: </div>
                                            <div class="rev-text"><p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p></div>
                                        </div>
                                    </article>
                                    
                                </div>
                                
                                <!--Add Review-->
                                <div class="add-review">
                                    <h3>Add a Review</h3>
                                    
                                    <form method="post" action="http://t.commonsupport.com/incles/shop-single.html">
                                        <div class="row clearfix">
                                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                <label>Name *</label>
                                                <input type="text" name="name" value="" placeholder="" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                <label>Email *</label>
                                                <input type="email" name="email" value="" placeholder="" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                <label>Website *</label>
                                                <input type="text" name="website" value="" placeholder="" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                <label>Rating </label>
                                                <div class="rating">
                                                    <a href="{{ asset( 'assets/front') }}/#" class="rate-box" title="1 Out of 5"><span class="fa fa-star"></span></a>
                                                    <a href="{{ asset( 'assets/front') }}/#" class="rate-box" title="2 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                    <a href="{{ asset( 'assets/front') }}/#" class="rate-box" title="3 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"> </span> <span class="fa fa-star"></span></a>
                                                    <a href="{{ asset( 'assets/front') }}/#" class="rate-box" title="4 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                    <a href="{{ asset( 'assets/front') }}/#" class="rate-box" title="5 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label>Your Review</label>
                                                <textarea name="review-message"></textarea>
                                            </div>
                                            <div class="form-group text-right col-md-12 col-sm-12 col-xs-12">
                                                <button type="button" class="theme-btn btn-style-four">Add Review</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <!--Related Projects-->
            <div class="related-projects">
                <h2>Related Projects</h2>
                <div class="row clearfix">
                    
                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" >
                        <div class="inner-box">
                            <div class="image">
                                <div class="ribbon">New</div>
                                <img src="{{ asset( 'assets/front') }}/images/resource/products/9.png" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="{{ asset( 'assets/front') }}/images/resource/products/9.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a></li>
                                                <li><a href="{{ asset( 'assets/front') }}/#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="{{ asset( 'assets/front') }}/shop-single.html"><span class="icon fa fa-link"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="{{ asset( 'assets/front') }}/shop-single.html">Diary </a></h3>
                                        <div class="price">$20.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ asset( 'assets/front') }}/shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset( 'assets/front') }}/images/resource/products/10.png" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="{{ asset( 'assets/front') }}/images/resource/products/10.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a></li>
                                                <li><a href="{{ asset( 'assets/front') }}/#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="{{ asset( 'assets/front') }}/shop-single.html"><span class="icon fa fa-link"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="{{ asset( 'assets/front') }}/shop-single.html">Painting Tools</a></h3>
                                        <div class="price">$55.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ asset( 'assets/front') }}/shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="image">
                                <div class="ribbon">New</div>
                                <img src="{{ asset( 'assets/front') }}/images/resource/products/11.png" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="{{ asset( 'assets/front') }}/images/resource/products/11.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a></li>
                                                <li><a href="{{ asset( 'assets/front') }}/#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="{{ asset( 'assets/front') }}/shop-single.html"><span class="icon fa fa-link"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="{{ asset( 'assets/front') }}/shop-single.html">Leather Book</a></h3>
                                        <div class="price">$150.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ asset( 'assets/front') }}/shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Shop Item-->
                    <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="image">
                                <div class="ribbon">New</div>
                                <img src="{{ asset( 'assets/front') }}/images/resource/products/12.png" alt="" />
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <ul class="options">
                                                <li><a href="{{ asset( 'assets/front') }}/images/resource/products/12.png" class="lightbox-image"><span class="icon fa fa-eye"></span></a></li>
                                                <li><a href="{{ asset( 'assets/front') }}/#"><span class="icon fa fa-heart"></span></a></li>
                                                <li><a href="{{ asset( 'assets/front') }}/shop-single.html"><span class="icon fa fa-link"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h3><a href="{{ asset( 'assets/front') }}/shop-single.html">Basket Ball</a></h3>
                                        <div class="price">$120.00</div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ asset( 'assets/front') }}/shop-single.html" class="cart-icon"><span class="fa fa-cart-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div> --}}
            
        </div>
    </div>
@endsection

@section('script')
    <script>
   function myFunction(event) {
    // Trying to stop the player if it goes above 1 second
    if (event.currentTime > 30) {
         event.pause();
        event.currentTime = 0
      
      
    }
  }
  $(document).ready(function(){
   $('.player').bind('contextmenu',function() { return false; });
});
</script>
@endsection