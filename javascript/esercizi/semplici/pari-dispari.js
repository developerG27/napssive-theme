//Ritorna se un numero è pari o dispari, se il numero non è valido richiederlo

var numeroUtente = parseInt(prompt('Inserisci un numero'))

while(isNaN(numeroUtente)){
    numeroUtente = parseInt(prompt('Inserisci un numero valido'))
}

if(numeroUtente%2 == 0){
    console.log(`${numeroUtente} è un numero pari`)
} else{
    console.log(`${numeroUtente} è un numero dispari`)
}