Scope è un insieme di regole su come accedere alle variabili

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


Una variabile non può uscire dalla sua funzione
function fuori() {
	var a = 1
	
	function dentro() {
		var b = 2
		console.log( a + b ) //3
	}

	dentro()
    
	
	console.log( a ) //1
    console.log(b) //Non è definito
}

fuori()



