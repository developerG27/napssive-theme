/*
DOM: document object model
 */
//Crea un paragrafo nel document
var paragrafo = document.createElement("p")
//Crea del testo nel documento
var node = document.createTextNode('Questo è il nuovo menu')
//Inserisce il testo all'interno del paragrafo
paragrafo.appendChild(node)
//Inserisce il paragrafo all'interno del body, ora è visibile
var elementoCreato =  document.body.appendChild(paragrafo)
//Cambia il colore del font al paragrafo
elementoCreato.style.color= 'red'