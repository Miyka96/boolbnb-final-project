<template>
    <div id="map" ref="mapRef"></div>
</template>

<script>
import { onMounted, ref } from "vue";
import "@tomtom-international/web-sdk-maps";
export default {
    name: "Map",
    setup() {
        const mapRef = ref(null);
        onMounted(() => {
            const tt = window.tt;
            var map = tt.map({
                key: "DINngHSiTz58Z5fDF5pThkg1IrJA87je",
                container: mapRef.value,
                style: "tomtom://vector/1/basic-main",
            });
            map.addControl(new tt.FullscreenControl());
            map.addControl(new tt.NavigationControl());
        });

        function addMarker(map) {
            const tt = window.tt;
            var location = [-121.91595, 37.36729];
            var popupOffset = 25;

            var marker = new tt.Marker().setLngLat(location).addTo(map);
            var popup = new tt.Popup({ offset: popupOffset }).setHTML(
                "Your address!"
            );
            marker.setPopup(popup).togglePopup();
        }
        addMarker(map);

        return {
            mapRef,
        };
    },
};
</script>

<style>
#map {
    height: 50vh;
    width: 50vw;
}
</style>
