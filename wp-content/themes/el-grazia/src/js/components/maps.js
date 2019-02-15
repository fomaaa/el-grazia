ymaps.ready(function()
{
  if ($('#mapCenter').length) {
    var mapCenter = new ymaps.Map('mapCenter',
      {
        center: centerOffice.coords,
        zoom: 16
      });
    var myPlacemark = new ymaps.Placemark(centerOffice.coords,
      {
        balloonContent: '123'
      },
      {
        // iconImageHref: '/assets/templates/main/img/map-ico2.png', // link image icon
        // iconImageSize: [100, 50], // size image
        // iconImageOffset: [-80, -60] // position image
      });
    // add balloon to map
    mapCenter.geoObjects.add(myPlacemark);
    mapCenter.controls.add('zoomControl',
      {
        top: 5,
        right: 5
      }); // add zoom control to map, and positon
    mapCenter.controls.add('miniMap',
      {
        bottom: 5,
        left: 5
      }); // add mini map
    mapCenter.controls.add('routeEditor',
      {
        top: 5,
        left: 5
      }); // add route Editor
  }

  if ($('#mapStudy').length) {
    var mapStudy = new ymaps.Map('mapStudy',
      {
        center: studyOffice.coords,
        zoom: 16
      });
    var myPlacemark = new ymaps.Placemark(studyOffice.coords,
      {
        balloonContent: '123'
      },
      {
        // iconImageHref: '/assets/templates/main/img/map-ico2.png', // link image icon
        // iconImageSize: [100, 50], // size image
        // iconImageOffset: [-80, -60] // position image
      });
    // add balloon to map
    mapStudy.geoObjects.add(myPlacemark);
    mapStudy.controls.add('zoomControl',
      {
        top: 5,
        right: 5
      }); // add zoom control to map, and positon
    mapStudy.controls.add('miniMap',
      {
        bottom: 5,
        left: 5
      }); // add mini map
    mapStudy.controls.add('routeEditor',
      {
        top: 5,
        left: 5
      }); // add route Editor
  }
});
