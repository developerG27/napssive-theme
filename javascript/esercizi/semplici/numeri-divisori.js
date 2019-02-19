//Mostra tutti i numeri divisori di un numero inserito dall'utente

var numeroUtente = parseInt(prompt('inserisci il numero che vuoi verificare'))

for(var i = 0; i<numeroUtente; i++){

    if(numeroUtente%i == 0){
        console.log(`I suoi divisori sono ${i}`)
    }
}