//In base ad un numero inserito dall'utente far apparire la sua tabella x 10

var numeroUtente = parseInt(prompt('Inserisci un numero'))

for(var i = 1; i<= 10; i++){
    console.log(`${numeroUtente} x ${i} = ${numeroUtente*i}`)
}