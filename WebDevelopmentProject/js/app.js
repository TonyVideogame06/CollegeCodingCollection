function showSchool(sch,you,bri){
	document.getElementById(sch).style.display= 'block';
	document.getElementById(you).style.display= 'none';
	document.getElementById(bri).style.display= 'none';
  }
  function showYoutube(sch,you,bri){
	document.getElementById(sch).style.display= 'none';
	document.getElementById(you).style.display= 'block';
	document.getElementById(bri).style.display= 'none';
  }
  function showBrigadas(sch,you,bri){
	document.getElementById(sch).style.display= 'none';
	document.getElementById(you).style.display= 'none';
	document.getElementById(bri).style.display= 'block';
  }
  function showAll(sch,you,bri){
	document.getElementById(sch).style.display= 'block';
	document.getElementById(you).style.display= 'block';
	document.getElementById(bri).style.display= 'block';
  }

$(document).ready(main);

var contador = 1;

function main(){
	$('.menu_bar').click(function(){
		// $('nav').toggle(); 

		if(contador == 1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}

	});

};