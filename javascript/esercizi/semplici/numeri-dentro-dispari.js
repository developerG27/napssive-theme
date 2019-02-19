//Chiedi due numeri all'utente e mostra solo i numeri dispari

var numeroUno = parseInt(prompt('Inserisci il primo numero'))
var numeroDue = parseInt(prompt('Inserisci il secondo numero'))

while (numeroUno < numeroDue) {
    numeroUno++

    if (numeroUno % 2 != 0) {
        console.log(numeroUno)
    }
}