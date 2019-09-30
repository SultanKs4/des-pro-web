function initMap() {
    //membuat objek untuk titik koordinat
    var poltek = {
        lat: -7.946757,
        lng: 112.615947
    };

    var mapDetails = {
        zoom: 17,
        center: poltek,
        mapTypeId: 'roadmap'
    }

    //membuat objek peta
    var map = new google.maps.Map(document.getElementById("mapsGoogle"), mapDetails);

    // Marker
    var marker = new google.maps.Marker({
        position: poltek,
        map: map,
        title: 'Politeknik Negeri Malang'
    });

    //membuat objek untuk info  window
    var contentString = '<h3>POLINEMA</h3>';

    //membuat objek info window
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    marker.addListener('click', function() {
        infowindow.open(map, marker)
    })
}