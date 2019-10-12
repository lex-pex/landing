function myMap()
{
    // myCenter=new google.maps.LatLng(50.45434012, 30.52756572);
    myCenter=new google.maps.LatLng(50.457530968938144, 30.388892618939288);
    var mapOptions= {
        center:myCenter,
        // zoom:12, scrollwheel: false, draggable: false,
        zoom:10, scrollwheel: false, draggable: true,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

    var marker = new google.maps.Marker({
        position: myCenter,
    });
    marker.setMap(map);
}

var imported = document.createElement('script');
imported.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDhfcxkm3QqFw74EXiTJPFNbhOGyc-nR64&callback=myMap';
document.head.appendChild(imported);
