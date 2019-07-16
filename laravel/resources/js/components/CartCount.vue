<template>
    
        <a :href="cartclick">
            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
            </i>
         CART
            <span class="alert badge" style="padding: 5px;margin-bottom: 0px;">
                               {{ cartcount }}
                            </span>
        </a>

    
</template>

<script>
    export default {
     
        props:['cartcount','cartclick'],

        data(){
            return {
            }
        },

        created() {
            console.log('Component mounted.')
        },

    }
</script>
