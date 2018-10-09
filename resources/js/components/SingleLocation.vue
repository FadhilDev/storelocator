<template>
    <gmap-map
            :center="center"
            :zoom="12"
            style="width:100%;  height: 100%;"
    >
        <gmap-marker
                :key="index"
                icon="/star-red.png"
                v-for="(marker, index) in markers"
                :position="marker"
                @click="center=marker"
        ></gmap-marker>
    </gmap-map>
</template>

<script>
export default {
  name: "GoogleMap",
  data() {
    return {
      center: {
            lat: 47.376332,
            lng: 8.547511
          },
      markers: [
        {
          lat: 47.376332,
          lng: 8.547511
        },
        {
          lat: 47.374592,
          lng: 8.548867
        },
        {
          lat: 47.379592,
          lng: 8.549867
        }
      ]
    };
  },
  mounted() {
    console.log("mounted");
  },

  methods: {}
};
</script>

<style scoped>
</style>