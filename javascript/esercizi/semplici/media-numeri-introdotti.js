//Utilizzando un ciclo mostra la somma e la media dei numeri introdotti fin quando viene inserito un numero negativo

var totale = 0
var contatore = 0

do{
    //Il risultato si converte in intero
    var numeroUtente = parseInt(prompt('inserisci un numero'))

    //se non è un numero, numero è zero
    if(isNaN(numeroUtente)){
        var numeroUtente = 0
    } else {
        totale = totale + numeroUtente
        contatore++
    }
}while(numeroUtente >= 0)

console.log(`Sono stati introdotti ${contatore} numeri e la somma totale dei numeri ${totale}`)
console.log(`La media dei numeri inseriti è ${(totale/contatore).toFixed(2)}`)