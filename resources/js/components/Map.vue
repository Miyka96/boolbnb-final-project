<template>
  <div>
    <div id="map" ref="mapRef"></div>
  </div>
</template>

<script>
export default {
  name: "Map",
  props: {
    lon: Number, 
    lat: Number,
  },
  methods: {
    initializeMap: function () {
      const map = tt.map({
        key: "yQdOXmdWcQjythjoyUwOQaQSJBBNCvPj",
        container: "map",
        zoom: 14,
        center: [13.36516, 38.11366],
      });
      // aggiunta controlli mappa
      map.addControl(new tt.FullscreenControl());
      map.addControl(new tt.NavigationControl());
      new tt.Marker().setLngLat([13.36516, 38.11366]).addTo(map);
    },
  },
  mounted: function () {
    this.initializeMap();
  },
};
</script>
<style>
#map {
  border-radius: 10px;
  height: 400px;
  width: 100%;
}
</style>