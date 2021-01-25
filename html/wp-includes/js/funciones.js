function realizarPeticion(){

console.log("Entré en la función")
let peticion;

if(window.XMLHttpRequest) peticion = new XMLHttpRequest();
else peticion = new ActiveXObject ("Microsoft.XMLHTTP");

peticion.addEventListener ("load", ()=>{
	let respuesta;
	if (peticion.status == 200) respuesta = peticion.response;
	else respuesta = "Lo siento no se ha encontrado el recurso"
	console.log(peticion)

})

peticion.open("GET", "https://scrape.abstractapi.com/v1/?api_key=92eff9fe02764fc29ef760679d6a08b8&url=https://google.es"); // true for asynchronous
peticion.send();

}

