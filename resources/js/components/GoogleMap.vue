<template>
     <gmap-map :center="center" :zoom="15" style="width: 100%; height: 100%">
      <gmap-info-window :options="infoOptions" :position="infoWindowPos" :opened="infoWinOpen" @closeclick="infoWinOpen=false">
<<<<<<< HEAD
       
 <template>
  <v-layout>
    <v-flex xs12 sm6 offset-sm3>
      <v-card>
        <v-img
          src="https://cdn.vuetifyjs.com/images/cards/desert.jpg"
          aspect-ratio="2.75"
        ></v-img>

        <v-card-title primary-title>
          <div>
            <h3 class="headline mb-0"> {{infoContent.infoText}}</h3>
            <div>{{infoContent.infoDetails}}</div>
          </div>
        </v-card-title>

      </v-card>
    </v-flex>
  </v-layout>
</template>
  
=======
                 
                  <template>
  <v-card>
    <v-card-text>
      <p class="text-xs-center"> {{infoContent.infoText}}</p>
    </v-card-text>
  </v-card>
</template>
>>>>>>> 253de8f02fa3cecbb64cbf7f021258e6a92a946b
      </gmap-info-window>

      <gmap-marker :key="index" v-for="(marker,index) in markers" :position="marker.position" :clickable="true" @click="toggleInfoWindow(marker,index)"></gmap-marker>
    </gmap-map>
</template>

<script>
export default {
  name: "GoogleMap",
  data() {
    return {
<<<<<<< HEAD
      center: {
            lat: 47.376332,
            lng: 8.547511
=======
  
      center: {
           lat:0,
           lng: 0
>>>>>>> 253de8f02fa3cecbb64cbf7f021258e6a92a946b
          },
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
      markers: [],
        
    };
  },
  mounted() {
    console.log("mounted");
<<<<<<< HEAD
     axios.get('api/services')
                .then(({data})=>{
                  this.markers=data.data;
                   console.log(data.data)
                   console.log('Markers  '+this.markers)
=======
     axios.get('api/map')
                .then(({data})=>{
                  this.markers=data.data;
                   this.center.lat=data.data[0].position.lat;;
                   this.center.lng=data.data[0].position.lng;
                  
>>>>>>> 253de8f02fa3cecbb64cbf7f021258e6a92a946b
                })
                .catch((resp)=> {
                    console.log(resp);
                    alert("Could not create");
                });

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
          }
  }
};
</script>

<style scoped>
</style>