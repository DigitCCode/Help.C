//JavaScript do site Help.c

//Capturando o elemento de menu
var navLinks = document.getElementById("navLinks");

//navLinks.style.display = "none";

//Função para mostrar o menu
function showMenu(){
	navLinks.style.right = "0";
	navLinks.style.display = "block";
}


//Função para esconder o menu
function hideMenu(){
        navLinks.style.right = "-200px";
	navLinks.style.display = "none";
}

//Função que chama o popup
/*function newPopup(){
	varWindow = window.open (
	'login.html',
	'pagina',
	"width=600, height=600, top=auto, left=auto, scrollbars=no " );
}*/

//Card Slider
$(".slider").owlCarousel({
	loop: true,
	autoplay: true,
	autoplayTimeout: 2000,
	autoplayHoverPause: true,
});

/*function menuToggle(){
    const toggleMenu = document.querySelector('.menu')
    toggleMenu.classList.toggle('active')
}*/
