<template>
     <gmap-map :center="center" :zoom="15" style="width: 100%; height: 100%">
      <gmap-info-window :options="infoOptions" :position="infoWindowPos" :opened="infoWinOpen" @closeclick="infoWinOpen=false">
                 
  <template>
      <v-card>
    <v-card-text>
      <p class="text-lg-center blue-grey--text">{{infoContent.infoText}}</p>
    </v-card-text>
  </v-card>
</template>
      </gmap-info-window>

      <gmap-marker :key="index" v-for="(marker,index) in markers" :position="marker.position" :clickable="true" @click="toggleInfoWindow(marker,index)"></gmap-marker>
    </gmap-map>
</template>

<script>
export default {
  name: "GoogleMap",
  data() {
    return {
      center: {
            lat:32.616220,
            lng:44.032058
          },
           markers: [],
           infoContent: '',
          infoWindowPos: null,
          infoWinOpen: false,
          currentMidx: null,
          //optional: offset infowindow so it visually sits nicely on top of our marker
          infoOptions: {
            pixelOffset: {
              width: 0,
              height: -35
            }
          }, 
    };
  },
  watch: {
   '$i18n.locale': function () {
      this.initData();
   }
    },
  mounted() {
     this.initData();
  },

  methods: {
     toggleInfoWindow(marker, idx) {
            this.infoWindowPos = marker.position;
            this.infoContent = marker.infoContent;

            //check if its the same marker that was selected if yes toggle
            if (this.currentMidx == idx) {
              this.infoWinOpen = !this.infoWinOpen;
            }
            //if different marker set infowindow to open and reset current marker index
            else {
              this.infoWinOpen = true;
              this.currentMidx = idx;

            }
          },
           initData() {
              axios.get('api/map', {params: {lang:this.$i18n.locale}})
                .then(({data})=>{
                  this.markers=data.data;
                })
                .catch((resp)=> {
                    console.log(resp);
                });
            },
  }
};
</script>

<style scoped>
</style>