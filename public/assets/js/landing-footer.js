$(function () {
    /*
    * Landing footer
    * */
    if ($.scrollify) {
      $(".footer-map").on('mousemove touchmove', function () {
        $.scrollify.disable();
      }).on('mouseleave', function () {
        $.scrollify.enable();
      });
    }
  });
  
  /*
  * Footer map props
  * */
  let map = '',
    mapContainer = $('.map-image'),
    mapBackground = $('.landing-footer').attr('data-map-background'),
    mapTextColor = $('.landing-footer').attr('data-map-text-color'),
    continentBackground = $('.landing-footer').attr('data-continent-background'),
    mapStyles = [
      {"elementType": "geometry", "stylers": [{"color": continentBackground}]},
      {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]},
      {"elementType": "labels.text.fill", "stylers": [{"color": mapTextColor}]},
      {"elementType": "labels.text.stroke", "stylers": [{"color": continentBackground}]},
      {"featureType": "administrative", "elementType": "geometry", "stylers": [{"color": mapTextColor}]},
      {"featureType": "administrative.country", "elementType": "labels.text.fill", "stylers": [{"color": mapTextColor}]},
      {"featureType": "administrative.land_parcel", "stylers": [{"visibility": "off"}]},
      {
        "featureType": "administrative.locality",
        "elementType": "labels.text.fill",
        "stylers": [{"color": mapTextColor}]
      },
      {"featureType": "administrative.neighborhood", "stylers": [{"visibility": "off"}]},
      {"featureType": "poi", "elementType": "labels.text", "stylers": [{"visibility": "off"}]},
      {"featureType": "poi", "elementType": "labels.text.fill", "stylers": [{"color": mapTextColor}]},
      {"featureType": "poi.business", "stylers": [{"visibility": "off"}]},
      {"featureType": "poi.park", "elementType": "geometry", "stylers": [{"color": continentBackground}]},
      {"featureType": "poi.park", "elementType": "labels.text.fill", "stylers": [{"color": mapTextColor}]},
      {"featureType": "poi.park", "elementType": "labels.text.stroke", "stylers": [{"color": continentBackground}]},
      {"featureType": "road", "stylers": [{"visibility": "off"}]},
      {"featureType": "road", "elementType": "geometry.fill", "stylers": [{"color": "#2c2c2c"}]},
      {"featureType": "road", "elementType": "labels", "stylers": [{"visibility": "off"}]},
      {"featureType": "road", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]},
      {"featureType": "road", "elementType": "labels.text.fill", "stylers": [{"color": mapTextColor}]},
      {"featureType": "road.arterial", "elementType": "geometry", "stylers": [{"color": "#373737"}]},
      {"featureType": "road.highway", "elementType": "geometry", "stylers": [{"color": "#3c3c3c"}]},
      {"featureType": "road.highway.controlled_access", "elementType": "geometry", "stylers": [{"color": "#4e4e4e"}]},
      {"featureType": "road.local", "elementType": "labels.text.fill", "stylers": [{"color": mapTextColor}]},
      {"featureType": "transit", "stylers": [{"visibility": "off"}]},
      {"featureType": "transit", "elementType": "labels.text.fill", "stylers": [{"color": mapTextColor}]},
      {"featureType": "water", "elementType": "geometry", "stylers": [{"color": mapBackground}]},
      {"featureType": "water", "elementType": "labels.text", "stylers": [{"visibility": "off"}]},
      {"featureType": "water", "elementType": "labels.text.fill", "stylers": [{"color": mapTextColor}]}],
    mapInitialCenter = {
      lat: 37.679426,
      lng: -7.596366
    },
    mapMarker = mapContainer.data('marker');
  
  function initMap() {
    function render_map($el) {
  
      // Var
      let $markers = $el.find('.i-marker');
  
      // Vars
      let args = {
        center: new google.maps.LatLng(37.679426, -7.596366),
        zoom: 1,
        disableDefaultUI: true,
        // zoomControl: false,
        // disableDoubleClickZoom: false,
        // panControl: false,
        // mapTypeControl: false,
        // scaleControl: false,
        // scrollwheel: true,
        // streetViewControl: false,
        // draggable: true,
        // fullscreenControl: false,
        // overviewMapControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: mapStyles
      };
  
      // Create map
      map = new google.maps.Map($el[0], args);
  
      // Add a markers reference
      map.markers = [];
  
      // Add markers
      $markers.each(function () {
        add_marker($(this), map);
      });
  
      // Center map
      // center_map(map);
    }
  
    function add_marker($marker, map) {
  
      // Var
      let latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
  
      // Create marker
      let marker = new google.maps.Marker({
        icon: mapMarker,
        position: latlng,
        map: map
      });
  
      // Add to array
      map.markers.push(marker);
  
      // If marker contains HTML, add it to an infoWindow
      if ($marker.html()) {
        // Create info window
        let infowindow = new google.maps.InfoWindow({
          content: $marker.html()
        });
        // Show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function () {
          infowindow.open(map, marker);
        });
      }
  
    }
  
    function center_map(map) {
  
      // Vars
      let bounds = new google.maps.LatLngBounds();
  
      // Loop through all markers and create bounds
      $.each(map.markers, function (i, marker) {
        let latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
        bounds.extend(latlng);
      });
      // map.fitBounds(bounds);
      map.setCenter(bounds.getCenter());
      // map.setZoom(17);
  
    }
  
    $(document).ready(function () {
      mapContainer.each(function () {
        render_map($(this));
      });
    });
  }
  
  $(window).on('load', function () {
  
    /* Init map */
    initMap();
  
    $('.map-image img').each(function () {
  
      let mediaPath = $(this).data('src');
  
      if(mediaPath) {
        $(this).attr('src', mediaPath);
      }
    });
  
    /* Toggle footer map */
  
    $('.map-link-js').on('click', function (e) {
      e.stopPropagation();
      e.preventDefault();
  
      let currentLat = $(this).data('lat-center'),
        currentLng = $(this).data('lng-center'),
        currentZoom = $(this).data('zoom');
  
      $('.map-link-js').not($(this)).removeClass('active');
      $(this).addClass('active');
  
      if ($(this).hasClass('map-dropdown-link')) {
  
        let continentTitle = $(this).text();
  
        $('.map-dropdown-toggle').text(continentTitle);
        $('.map-dropdown-menu').slideUp();
      }
  
      let center = new google.maps.LatLng(currentLat,currentLng);
      map.setCenter(center);
      map.setZoom(currentZoom);
  
      //Set offices content
      let locationTitle = $(this).data('title');
      let locationHtml = $(this).data('html');
  
      $("#offices-title").html(locationTitle);
      $("#offices-text").html(locationHtml);
      $("#footer-btn").css("visibility", "visible");
  
    });
  
    $('.map-dropdown-toggle').on('click', function (e) {
      e.preventDefault();
      $('.map-dropdown-menu').slideToggle();
    });
  });