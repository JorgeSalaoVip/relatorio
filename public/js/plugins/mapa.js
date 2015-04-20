var geocoder;
var map;
var marker;
var markersArray = [];
var infoBox = [];

function initialize(cordenadas) {
	icon = base_url('public/img/mapbusca.png');
	cor = cordenadas.split(',');

	var latlng = new google.maps.LatLng(cor[0],cor[1]);
	var options = {
		zoom: 14,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	map = new google.maps.Map(document.getElementById("mapCanvas"), options);
	
	geocoder = new google.maps.Geocoder();
	
	marker = new google.maps.Marker({
		map: map,
		draggable: false,
		icon: icon,
		animation: google.maps.Animation.DROP,
		title: 'Endereço da Busca'
	});

	marker.setPosition(latlng);
}

function addsalaomapa(pLat,pLon,icon,nome,slug){
	var latlng = new google.maps.LatLng(pLat, pLon);
	var marker = new google.maps.Marker({
		map: map,
		icon: icon,
		animation: google.maps.Animation.DROP,
		title: nome
	});
	
	infoBox[slug] = new InfoBox();
	infoBox[slug].marker = marker;
	
	google.maps.event.addListener(marker, 'click', function() {
		$(".addSalaoMapa").removeClass('active');
		for (i in infoBox) {
		  infoBox[i].marker.setAnimation(null);
		}
		if (marker.getAnimation() != null) {
			marker.setAnimation(null);
	    } else {
			$("#"+slug).addClass('active');
			var $paneOptions = $('.search-page');
			$paneOptions.scrollTo( '#'+slug, 1000 );
			marker.setAnimation(google.maps.Animation.BOUNCE);
		}
    });
	//markersArray.push(marker);
	marker.setPosition(latlng);
}

//GEOLOCATION ----------------------
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("O seu navegador não suporta o recurso de geolocalização.");
    }
}

function showPosition(position) {
	$('#regiao').val('');
    $("#coordenadasBusca").val(position.coords.latitude + "," + position.coords.longitude); 
	setTimeout(function(){
		carregaSaloesBusca(1);
	},100);
	var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
	marker.setPosition(latlng);
	map.setCenter(latlng);
}

function getLocationHome() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPositionHome);
    } else {
        alert("O seu navegador não suporta o recurso de geolocalização.");
    }
}

function showPositionHome(position) {
    $("#coordenadasBusca").val(position.coords.latitude + "," + position.coords.longitude); 
	$('#btnEndereco').click();
}

//---------------------------------

function buscaNova(){
	carregarNoMapa($('#regiao').val());
	setTimeout(function(){
            $('#carregaMaisSaloes').attr('onclick', "carregaSaloesBusca('1')");
            carregaSaloesBusca(1);
	},100);
}

function carregaSaloesBusca(paginacao){
	var url = String($("#paginaBusca").val());
	if(url.search("bw")>0){
		filtro = "beauty-week";
		urlInicio = 'bw';
	} else {
		filtro = "regiao";
		urlInicio = 'busca';
	}

	if(paginacao==1){
		$("#listaSaloes").html('');
		for (i in infoBox) {
		  infoBox[i].marker.setMap(null);
		}
		$('#paginacaoAtual').val('1');
	} else if(paginacao>1){
		newpaginacao = parseInt(paginacao)+1;
		$('#carregaMaisSaloes').attr('onclick',"carregaSaloesBusca('"+newpaginacao+"')");		
	} else {
		$("#listaSaloes").html('');
		paginacao = 1;
	}
	
	var dados = $('#formBusca').serialize();
	var newUrl = base_url('busca_ajax')+'/'+paginacao+'/proximidade/'+filtro;
	$.ajax({
		type: "GET",
		data: dados,
		url: newUrl,
		success : function(dados){
			$("#listaSaloes").append(dados);
			$('.addSalaoMapa[data-pagina="'+paginacao+'"]').each(function(index, element) {
				addsalaomapa($(this).attr('data-lat'),$(this).attr('data-lng'),$(this).attr('data-icon'),$(this).attr('data-nome'),$(this).attr('data-slug'));
			});
			window.history.pushState('Object', '', base_url(urlInicio)+'?busca='+$('#busca').val()+'&regiao='+$('#regiao').val());
		}
	}); 
}

function carregarNoMapa(endereco) {
	geocoder.geocode({ 'address': endereco, 'region': 'BR' }, function (results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			if (results[0]) {
				var latitude = results[0].geometry.location.lat();
				var longitude = results[0].geometry.location.lng();
	
				$('#regiao').val(results[0].formatted_address);
				$("#coordenadasBusca").val(latitude+','+longitude);
						
				var location = new google.maps.LatLng(latitude, longitude);
				marker.setPosition(location);
				map.setCenter(location);
				map.setZoom(14);
				
				setTimeout(function(){
					carregaSaloesBusca();
				},200);
				$('.search-page').perfectScrollbar();
			}
		}
	})
}

function centralizarSalao(esse){
	for (i in infoBox) {
	  infoBox[i].marker.setAnimation(null);
	}
	infoBox[esse].marker.setAnimation(google.maps.Animation.BOUNCE);
	var latlng = infoBox[esse].marker.getPosition();
	map.setCenter(latlng);
	$(".addSalaoMapa").removeClass('active');
	$("#"+esse).addClass('active');
}

$(document).ready(function () {
	initialize($('#coordenadasBusca').val());
	dimensionar();
	$('.search-page').perfectScrollbar();

//?????????????????????????????????????????ww
	google.maps.event.addListener(marker, 'drag', function () {
		geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				if (results[0]) {  
					$('#regiao').val(results[0].formatted_address);
					$("#coordenadasBusca").val(marker.getPosition().lat()+','+marker.getPosition().lng());
				}
			}
		});
	});
//?????????????????????????????????????????ww
	
	$("#regiao").autocomplete({
		source: function (request, response) {
			geocoder.geocode({ 'address': request.term + ', Brasil', 'region': 'BR' }, function (results, status) {
				response($.map(results, function (item) {
					return {
						label: item.formatted_address,
						value: item.formatted_address,
						latitude: item.geometry.location.lat(),
          				longitude: item.geometry.location.lng()
					}
				}));
			})
		},
		select: function (event, ui) {
			initialize(ui.item.latitude+','+ui.item.longitude);
			$("#coordenadasBusca").val(ui.item.latitude+','+ui.item.longitude);
			carregaSaloesBusca();
		}
	});
	carregarNoMapa($("#regiao").val());
});