<template>
    <gmap-map
            :center="center"
            :zoom="12"
            style="width:100%;  height: 100%;"
    >
         <gmap-marker :key="index" v-for="(marker,index) in markers"
         :position="marker.position">
        </gmap-marker>
    </gmap-map>
</template>

<script>
export default {
  data() {
    return {
      center: {
            lat: 32.607072,
            lng: 44.010930
          },
      markers: [
        {position:{
          lat: 32.607072,
            lng: 44.010930
            }
        }
      ]
    };
  },
  mounted() {
    if(this.$route.params.lat!=null||this.$route.params.lng!=null){
    const marker={
      lat:parseFloat(this.$route.params.lat),
      lng:parseFloat(this.$route.params.lng),
    }
    this.center=marker;
    this.markers.push({position:marker})
    }
  },
};
</script>

<style scoped>
</style>