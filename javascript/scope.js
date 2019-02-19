/*
Scope è un insieme di regole su come accedere alle variabili
*/
function uno(){
    var a = 1
    console.log(a)
}
function due(){
    var a = 1
    console.log(a)
}
uno() //1
due() //2


/*
Una variabile all'interno di una funzione è raggiungibile solo all'interno dell funzione stessa
*/
function helloWorld(testo){
	var testo = 'Sono una variabili globale'
	console.log(testo)
}
helloWorld(testo) //errore


function helloWorld(testo){
	console.log(testo)
}
var testo = 'Sono una variabili globale'
helloWorld(testo) //Corretto