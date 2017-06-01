<!DOCTYPE html>
<html>
<head>
	<title>Bella Door</title>
	<link rel="stylesheet" type="text/css" href="/site-files/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
</head>
<body>

<!-- <div id="preloader"></div> -->

<div id="header">
	<div id="contacts">
		8 917 123 45 78<br>
		г. Уфа, ул. Менделеева, 158
	</div>
	<div id="logo"></div>
</div>

<div class="grid">
	<h1>Межкомнатные<br>двери</h1>
	Мы продаем межкомнатные двери из&nbsp;натурального массива дерева от&nbsp;известных производителей. Приезжайте в&nbsp;наш салон и&nbsp;подберите дверь на&nbsp;свой вкус
</div>

<script type="text/javascript">
	ymaps.ready(init);
	var myMap,
	myPlacemark;
    function init(){     
		myMap = new ymaps.Map("map", {
			center: [54.72478056997075,56.0211779999999],
			zoom: 16,
			controls: []
		});
		myPlacemark = new ymaps.Placemark([54.72478056997075,56.0211779999999], { 
			hintContent: 'LABELSTAR', 
			balloonContent: 'LABEL<b>STAR</b><br>г. Самара, ул. Ерошевского, 15, офис 9' 
		});
		myMap.geoObjects.add(myPlacemark);
		myMap.behaviors
		.disable(['scrollZoom']);
    }
</script>


	<div id="map-header">
		<h1>Наш новый адрес</h1>
		г.&nbsp;Уфа, ул.&nbsp;Менделеева,&nbsp;158<br>Выстовочный комплекс ВДНХ
	</div>
<div id="map">
</div>

<div id="footer">
	Сайт находится в&nbsp;разработке. По всем вопросам звоните +7&nbsp;999&nbsp;133&nbsp;15&nbsp;96
</div>

<!-- Прелоадер -->
<script type="text/javascript">
	$(window).on('load', function () {
	    setTimeout(function(){
	    	$('#preloader').fadeOut('slow');
	    },1000);
	    setTimeout(function(){
	    	$('body').css('overflow', 'auto');
	    },1700);
	});
</script>

</body>
</html>