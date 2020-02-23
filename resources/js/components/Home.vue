<template>
    
 <div>
      <v-app id="inspire">
      <v-carousel hide-delimiters>
        <v-carousel-item
          v-for="(item,i) in items"
          :key="i"
          :src="item.src"
        ></v-carousel-item>
      </v-carousel>
      <div class="article">
        <h1>Sertified Company</h1>
        <p>The Best Elegant Cleaning Around.</p>
        <button>Booking online</button>
        <div class="art"> 
           <h6>Discount</h6>
           <h1>-30%</h1>
           <h6>for first order</h6>
        </div>
      </div>
    </v-app>
 </div>

</template>


<script>
export default {
   data () {
    return {
      items: [
        {
          src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
        },
        {
          src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
        },
        {
          src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
        },
        {
          src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
        },
      ],
    }
   }

}
</script>

<style lang="scss">

@mixin elementCenter() {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

#inspire{
  display: inline-block;
  position: relative;
  margin-top: 180px;
  .article{
    @include elementCenter();
    position: absolute;
    width: 300px;
    height: 300px;
    background-color: #C33C54;
    border-radius: 50%;
    margin:10vh 20vh;
    padding: 20px;
    h1{
      color: #fff;
      font-size: 30px;
    }
    p{
      color: #8EE3EF;
      white-space: nowrap;
      font-size: 17px;
      line-height: 17px;
      font-weight: 400;
      letter-spacing: 0px;
      font-style: italic;
      visibility: inherit;
      padding: 10px;
    }
    button{
      background-color:#254E70;
      padding: 10px 20px;
      color: #fff;
      border-radius: 10px;
      white-space: nowrap;
      font-size: 11px;
      line-height: 13px;
      font-weight: 700;
      letter-spacing: 0px;
      font-family: "Droid Sans";
      text-transform: uppercase;



    }
    .art{
        @include elementCenter();
        position: absolute;
        width: 120px;
        height: 120px;
        background-color: #8EE3EF;
        border-radius: 50%;
        top: -10%;
        float: right;
        right: 0;
        line-height: 11px;

        h6{

          
            color: #254E70;
            white-space: nowrap;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0px;
            line-height: 11px;
            font-style: italic;
            visibility: inherit;
           
              }
              h1 {
                color:#C33C54;
                 font-size: 30px;
                 font-weight: 800;
                 line-height: 16px;
              }
        }
        
  }
}



</style>