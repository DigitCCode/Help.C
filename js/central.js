const search = document.querySelector('.search');

addEventListener('submit', e => {
    e.preventDefault();
})

function active(z){
	switch(z){
		case "apae":
			document.getElementById('apae').style.display = 'flex';
		case "cdc":
			document.getElementById('cdc').style.display = 'flex';
		case "conviver":
			document.getElementById('conviver').style.display = 'flex';
		case "ista":
			document.getElementById('ista').style.display = 'flex';
		case "livp":
			document.getElementById('livp').style.display = 'flex';
		default: 
			console.log("ivalido");
	}
}

