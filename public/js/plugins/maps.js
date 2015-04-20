$(document).ready(function(e) {
    $("#latCOR, #lonCOR").change(function(){
		posicionarInfo($("#latCOR").val(),$("#lonCOR").val(),'mapa');
	});
	$(".NBSVIP").click(function(){
		$("#latCOR").change();
	});
});

function initialize_busca(pLat,pLon,id,icon) {
    var latlng = new google.maps.LatLng(pLat, pLon);
	var options = {
        zoom: 12,
        center: latlng,
		scrollwheel: 0,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById(id), options);
    marker = new google.maps.Marker({
        map: map,
        draggable: false,
		icon: icon,
		title: 'Endereço da Busca'
    });
	marker.setPosition(latlng);
}
	
function addsalaomapa(pLat,pLon,icon,logo,endereco,nome,slug){
	var latlng = new google.maps.LatLng(pLat, pLon);
	var marker = new google.maps.Marker({
		map: map,
		icon: icon,
		title: nome
	});
	google.maps.event.addListener(marker, 'click', function() {
      	$('html, body').animate({
			scrollTop: $("#"+slug).offset().top
		}, 2000);
    });
	marker.setPosition(latlng);
}
function posicionar(pLat,pLon,icon,nome,id){
	var latlng = new google.maps.LatLng(pLat, pLon);
	var options = {
        zoom: 15,
        center: latlng,
		scrollwheel: 0,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById(id), options);
    marker = new google.maps.Marker({
        map: map,
        draggable: false,
		icon: icon,
		title: nome
    });
	marker.setPosition(latlng);
}
function posicionarInfo(pLat,pLon,id){
	var latlng = new google.maps.LatLng(pLat, pLon);
	var options = {
        zoom: 15,
        center: latlng,
		scrollwheel: 0,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById(id), options);
    marker = new google.maps.Marker({
        map: map,
        draggable: true,
    });
	google.maps.event.addListener(marker, 'dragend', toggleBounce);
	marker.setPosition(latlng);
}
function toggleBounce() {
	position = String(marker.getPosition());
	position = position.replace('(','');
	position = position.replace(')','');
	position = position.split(',');
	$("#latCOR").val(position[0]);
	$("#lonCOR").val(position[1]);
}
function getCoordenadas(){
	cep = $("#cep").val();
	endereco = $("#endereco").val();
	bairro = $("#bairro").val();
	cidade = $("#cidade").val();
	estado = $("#estado").val();
	enderecoCompleto = endereco + ' - ' + bairro + ', ' + cidade + ' - ' + estado;

	var geocoder = new google.maps.Geocoder();
	geocoder.geocode({
		"address": enderecoCompleto
	}, function(results) {
		if(results[0]===undefined){
			apprise('Não encontramos o seu endereço.');
		} else {
			LatLng = String(results[0].geometry.location); //LatLng
			LatLng = LatLng.replace('(','').replace(')','').split(',');
			posicionarInfo(LatLng[0],LatLng[1],'mapa');
			$("#latCOR").val(LatLng[0]);
			$("#lonCOR").val(LatLng[1]);
		}
	});
}