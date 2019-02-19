/*
-Chiedi sei numeri all'utente
-Mostrare l'array per intero
-Ordinarlo e mostrarlo
-Invertire il suo ordine e mostrarlo
-Mostrare quanti elementi ci sono
*/

var numeri = []

for(var i = 0; i <=5; i++){
    numeri.push(parseInt(prompt('Inserisci un numero')))
}

for(let numero in numeri){
    console.log(numeri[numero])
}

numeriOrdinati = numeri.sort()
for(let numero in numeriOrdinati){
    console.log(numeriOrdinati[numero])
}

numeriInvertiti = numeriOrdinati.reverse()
for(let numero in numeriInvertiti){
    console.log(numeriInvertiti[numero])
}

console.log(`In questo array ci sono ${numeri.length} elementi`)