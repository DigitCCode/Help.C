//JavaScript do site Help.c

//Capturando o elemento de menu
var navLinks = document.getElementById("navLinks");

//navLinks.style.display = "none";

//Função para mostrar o menu
function showMenu(){
	navLinks.style.right = "0";
	//navLinks.style.display = "block";
}


//Função para esconder o menu
function hideMenu(){
        navLinks.style.right = "-200px";
	//navLinks.style.display = "none";
}

//Função que chama o popup
function newPopup(){
	varWindow = window.open (
	'popup.html',
	'pagina',
	"width=350, height=255, top=100, left=110, scrollbars=no " );
}