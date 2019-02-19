/*
Crea una calcolatrice:
-Chiede due numeri all'utente
-Se inseriamo un numero sbagliato ce lo chiede ancora
-Ritorna il risultato della somma, sottrazione, multiplicazione,
 */

var numeroUno = parseInt(prompt('Inserisci il primo numero'))
var numeroDue = parseInt(prompt('Inserisci il secondo numero'))

while(numeroUno < 0 || numeroDue < 0 || isNaN(numeroUno) || isNaN(numeroDue)){
    numeroUno = parseInt(prompt('Inserisci il primo numero'))
    numeroDue = parseInt(prompt('Inserisci il secondo numero'))
}

var somma = numeroUno + numeroDue
var sottrazione = numeroUno - numeroDue
var divisione = numeroUno / numeroDue
var moltiplicazione = numeroUno * numeroDue

console.log(
    `
    ${numeroUno} + ${numeroDue} = ${somma} \n
    ${numeroUno} - ${numeroDue} = ${sottrazione} \n
    ${numeroUno} / ${numeroDue} = ${divisione} \n
    ${numeroUno} * ${numeroDue} = ${moltiplicazione}
    `
)