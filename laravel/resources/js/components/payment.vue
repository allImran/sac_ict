<template>

      
            
                <tbody>
                <tr v-for="cartItem in cart" :key="cartItem.id">
                    <input type="hidden" name="product_id[]" :value="cartItem.id">
                </tr>
                <input type="hidden" name="total_price" :value="carttotal">
                </tbody>
        
   
    
</template>

<script>

    export default {
        
        props:['cart','carttotal','totalitems','cartlink'],
           
    }
</script>
