//Chiede due numeri e ritorna qual'è il numero maggiore e se sono uguali
//Se il numero è minore di zero, lo richieda

var numeroUno = prompt('inserisci il primo numero')
var numeroDue = prompt('Inserisci il secondo numero')

while(numeroUno <= 0 || numeroDue <= 0 || isNan(numeroUno) || isNan(numeroDue)){
    numeroUno = prompt('inserisci il primo numero')
    numeroDue = prompt('Inserisci il secondo numero')
}

if(numeroUno > numeroDue){
    console.log(`${numeroUno} è maggiore di ${numeroDue}`)
} else if(numeroUno == numeroDue){
    console.log('I due numeri sono uguali')
} else if(numeroDue > numeroUno){
    console.log(`${numeroDue} è maggiore che numero ${numeroUno}`)
} else{
    console.log('Inserisci dei numeri corretti')
}