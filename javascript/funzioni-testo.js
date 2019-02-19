//trasformare un numero in testo
var numero = 44
numero = numero.toString() // '44'

//testo in maiuscolo
var nome = 'gian'
nome = nome.toUpperCase() // 'GIAN'

//testo in minuscolo
var nome = 'Gian'
nome = nome.toLocaleLowerCase() // 'gian'

//calcolare la lunghezza di una stringa
var nome = 'Gian'
var lunghezzaNome = nome.length

//unire due testi
var nome = 'Gian'
var cognome = 'Pumayalla'
var concatenato = nome + " " + cognome //Gian Pumayalla
var concatenatoAlternativo = nome.concat(' ' + cognome) //Gian Pumayalla

//Ricerca all'interno di uno string
var testo = 'Ciao benvenuto alla documentazione di Javascript'
var ricerca = testo.indexOf('Javascript') //38

//Ricerca la parola tra due parametri
var testo = 'Ciao, benvenuto alla documentazione di Javascript'
var ricerca = testo.substr(10,4)

//Ritorna una lettera in specifico
var testo = 'Ciao, benvenuto alla documentazione di Javascript'
var ricerca = testo.charAt(10)

//Ricerca all'inizio della stringa, ritorna true o false
var testo = 'Ciao, benvenuto alla documentazione di Javascript'
var ricerca = testo.startsWith('Ci') //true

//Ricerca alla fine della stringa, ritorna true o false
var testo = 'Ciao, benvenuto alla documentazione di Javascript'
var ricerca = testo.endsWith('Javascript') // true

//Ricerca in tutta la stringa, ritorna true o false
var testo = 'Ciao, benvenuto alla documentazione di Javascript'
var ricerca = testo.includes('alla') // true

//Rimpiazza il testo
var testo = 'Ciao, benvenuto alla documentazione di Javascript'
var rimpiazzo = testo.replace('Javascript','EcmaScript')

//Taglia una string
var testo = 'Ciao, benvenuto alla documentazione di Javascript'
var taglio = testo.slice(14, 25)

//Separa ogni parola con il parametro indicato
var testo = 'Ciao, benvenuto alla documentazione di Javascript'
var separatore = testo.split(' ') // "Ciao", "benvenuto", "alla", "documentazione", "di", "Javascript"

//elimina gli spazi bianchi, all'inizio e alla fine
var testo = 'Ciao, benvenuto alla documentazione di Javascript'
var separatore = testo.trim()