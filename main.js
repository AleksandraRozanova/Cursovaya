ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map('map', {
            center: [56.40286317145235, 38.268080557172475],
            zoom: 9,
            controls: ['zoomControl'], //из элементов усправления остается только ползунок (приближени и удаление карты)
            behaviors: ['drag'] //карта не отдаляется, двигать немного возможно
        //}, {
            //searchControlProvider: 'yandex#search'
        });

    var placeMark = new ymaps.PlaceMark([55.911786547026544, 37.41788845231269], {
        hintContent: 'Название',
        baloonContent: 'Название по адресу'
    });

    myMap.geoObjects.add(placeMark);
}