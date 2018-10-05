<template>
    <gmap-map
            :center="center"
            :zoom="12"
            style="width:100%;  height: 100%;"
    >
        <gmap-marker
                :key="index"
                icon="/star-red.png"
                v-for="(m, index) in markers"
                :position="m.position"
                @click="center=m.position"
        ></gmap-marker>
    </gmap-map>
</template>

<script>
    export default {
        name: "GoogleMap",
        data() {
            return {
                // default to Montreal to keep it simple
                // change this to whatever makes sense
                center: { lat: 32.606906, lng:44.010469 },
                markers: [],
            };
        },

        mounted() {
           console.log('mounted');
            this.addMarker();
        },

        methods: {
            addMarker() {
                    const marker = {
                        lat: 32.606906,
                        lng: 44.010469
                    };
                    this.markers.push({ position: marker });
                    this.center = marker;
            },
            geolocate: function() {
                navigator.geolocation.getCurrentPosition(position => {
                    this.center = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                });
            }
        }
    };
</script>

<style scoped>

</style>