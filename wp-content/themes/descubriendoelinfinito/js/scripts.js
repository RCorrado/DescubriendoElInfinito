jQuery.noConflict();
jQuery(document).ready(function($){
	/*Colores del menú nav*/
	var colorList = ["green", "orange", "purple", "red", "blue", "yellow"];
	var eleMenu = document.querySelectorAll('.menu-item > a');
	for(i=0; i<eleMenu.length; i++){
		eleMenu[i].setAttribute('id', i);
	}

	$(".menu-item > a").mouseenter(function(){
		entrando(this);
	});

	$(".menu-item > a").mouseleave(function(){
		saliendo(this);
	});

	$(".burger").click(function(e){
		e.preventDefault();
		openCloseMenu(this);
	});

	/*Verificación del ancho del dispositivo*/
	checkWidth();

	function checkWidth(){
		if($(window).width() > 768){
			$(".post-list > h3").prepend('<hr>');
		} else {
			$("nav .list").addClass("black text-white");
		}
	}

	function openCloseMenu(elem){
		if($(elem).parent().hasClass("list")){
			$("nav > .burger").removeClass("active black text-white");
			$("nav .list").animate({
				left: '100%'
			});
			desbloquear();
		} else {
			$("nav .list").animate({
				left: '0'
			});
			bloquear();
			$(elem).addClass("active black text-white");
		}
	}

	function bloquear(){
		$("html, body").css("overflow-y", "hidden");
	}

	function desbloquear(){
		$("html, body").css("overflow-y", "auto");
	}

	function entrando(elem){
		var pos = $(elem).attr('id');
		$(elem).parent().delay(500).addClass("text-white").css({
			"background-color": colorList[pos],
			"padding": "0 45%"
		});
	}

	function saliendo(elem){
		var pos = $(elem).attr('id');
		$(elem).parent().delay(500).removeClass("text-white").css("background-color", "initial");
	}
});