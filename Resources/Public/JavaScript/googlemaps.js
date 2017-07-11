function initGoogleMap() {
    if ($('.google-map').length) {
        $('.google-map').each(function () {
            mapData = $(this).data();

            // var grayMapType = new google.maps.StyledMapType([
            //     {
            //         featureType: "all",
            //         elementType: "all",
            //         stylers: [
            //             {saturation: -80}
            //         ]
            //     }
            // ], {
            //     name: 'Gray Map'
            // });

            // var grayMapTypeId = 'gray_style';
            var plzCenter = new google.maps.LatLng(mapData.lat, mapData.lon);


            googleMap = new google.maps.Map(document.getElementById($(this).attr('id')), {
                zoom: mapData.zoom,
                center: plzCenter,
                // mapTypeId: [google.maps.MapTypeId.ROADMAP, grayMapTypeId],
                disableDefaultUI: false,
                disableDoubleClickZoom: true,
                draggable: false,
                scrollwheel: false
            });

            // googleMap.mapTypes.set(grayMapTypeId, grayMapType);
            // googleMap.setMapTypeId(grayMapTypeId);

            var marker = new google.maps.Marker({
                map: googleMap,
                position: plzCenter,
                icon: '/typo3conf/ext/tkcontent/Resources/Public/Icons/map-home.svg'
            });

        });
    }

}