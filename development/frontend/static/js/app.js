$(function() 
{
    FastClick.attach(document.body);

    // init google maps
    initGoogleMaps();

    function initGoogleMaps() 
    {
        if($('.map-canvas').length !== 0)
        {
            var mapOptions = {
              center: { lat: 50.064650, lng: 19.944980},
              zoom: 8,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              disableDefaultUI: true
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);        
        }

    }

    if($('.map-canvas').length !== 0)
    {
        google.maps.event.addDomListener(window, 'load', initGoogleMaps);
    }
});