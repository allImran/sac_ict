<template>
     <!--Shop Item-->
            <div class="shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeIn">
                <div class="inner-box">
                    <div class="image">
                        <img :src='albumimagepath' alt="" />
                        <div class="ribbon">New</div>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <ul class="options">
                                        <li><a :href="albumimagepath" class="lightbox-image"><span class="icon fa fa-eye"></span></a></li>
                                        <li><a href="#"><span class="icon fa fa-heart"></span></a></li>
                                        <li><a href="cart.html"><span class="icon fa fa-retweet"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-box">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h3><a :href="albumlink" >{{ album.title }}</a></h3>
                                <div class="price">{{ album.price }} Tk.</div>
                            </div>
                            <div class="pull-right">
                                <button @click="addToCart" class="cart-icon"><span class="fa fa-cart-plus"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
</template>

<script>
    export default {
         name: 'album',
        props:['album','albumlink','albumimagepath'],
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            addToCart(){
                bus.$emit('added-to-cart',this.album);
            }
            
        }
    }
</script>
