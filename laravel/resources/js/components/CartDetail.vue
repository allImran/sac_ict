<template>

        <div class="auto-container">
            
            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                            	<th class="prod-column" colspan="2">Product</th>
                                <th class="price">Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr v-for="cartItem in cart" :key="cartItem.id">
                                <td colspan="2" class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb"><a href="#"><img :src='imgPreUrl+cartItem.image' alt="" /></a></figure>
                                        <h4 class="prod-title">{{cartItem.title}}</h4>
                                    </div>
                                </td>
                                <td class="price">{{cartItem.price}} Tk.</td>
                                <td class="qty"><div class="quantity-spinner">
                                    <button type="button" @click="removeFromCart(cartItem)" class="minus"><span class="fa fa-minus"></span></button>
                                    <input type="text" name="product" :value="cartItem.qty" class="prod_qty" />
                                    <button type="button" @click="addToCart(cartItem)" class="plus"><span class="fa fa-plus"></span></button></div>
                                </td>
                                   
                                <td class="sub-total">$200</td>
                                <td class="remove"><a href="#" class="remove-btn"><span class="fa fa-remove"></span></a></td>
                            </tr>
                            
                            
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
            
            <div class="row clearfix">
                <div class="column pull-left col-md-6 col-sm-12 col-xs-12">
                	
                    <!-- <div class="cart-options clearfix">
                        <div class="apply-coupon clearfix">
                            <h4>Got A Couapon</h4>
                            <div class="form-group clearfix">
                                <input type="text" name="coupon-code" value="" placeholder="Coupon Code">
                                <button type="button" class="theme-btn btn-style-four">Coupon Code</button>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
                <div class="column pull-right col-md-6 col-sm-12 col-xs-12">
                    <div class="price-calculator">
                        <div class="outer-box">
                         <!--Total-->
                            <ul class="lower-total">
                            	<li class="clearfix"><span class="col bold-text">Total Price</span><span class="col total">{{carttotal}} Tk.</span></li>
                            	<li class="clearfix"><span class="col bold-text">Total Items</span><span class="col total">{{ totalitems}}</span></li>
                            </ul>
                            
                        </div>
                        
                        <!--Check Btns-->
                        <div class="check-btns">
                        	<a href="#" class="theme-btn btn-style-four update-btn">update cart</a>
                        	<a :href="cartlink" class="theme-btn btn-style-four proceed-btn">Proceed to Checkout</a>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
   
</template>

<script>
    
    
    export default {
        
        props:['cart','carttotal','totalitems','cartlink'],
        
        
        methods:{
            removeFromCart(item){
                bus.$emit('remove-from-cart',item);

            },
            addToCart(item){
                bus.$emit('added-to-cart',item);

            }
            


        },
        computed: {
            imgPreUrl : function() {
                    return "back/assets/img/products/";
                   
                }
        }
        }
</script>
