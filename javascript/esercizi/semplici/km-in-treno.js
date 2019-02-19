//Hai un budget di 4520€, calcola quanti km in treno puoi fare, considerando che ogni singolo km costa 0,89€

const BUDGET = 4520
const COSTO_KM_TRENO = 0.89

function kmTreno(){
    var kmDaPercorrere = (BUDGET / COSTO_KM_TRENO).toFixed(2)
    console.log(`Con ${BUDGET} euro, puoi percorre ${kmDaPercorrere}km`)
}

kmTreno()