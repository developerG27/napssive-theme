/*
Array | Matrice
Quando si vuole contare gli array, il primo elemento è sempro zero
*/
var nome = 'Gian' //Semplice variabile
var nomi = ['Gian','Luca','Marco'] //Un array

//per accedere all'interno di un array bisogna inserire la sua posizione
console.log(nomi[0]) //Gian

//Si può sapere la lunghezza di un array con gli stessi metodi che si usano per il testos
nomi.length //3

//Si può far apparire tutti gli elementi di un array grazie ai loop
for(var i = 0; i < nomi.length; i++){
    console.log(nomi[i])
}

//Si può fare anche con foreach
nomi.forEach((elemento, index, data) =>{
    console.log(`${index} ${elemento}`)
})

/*
Array Multidimensionali
Sono array con al suo interno altri array
 */
var categoria = ['azione','horror','commedia']
var film = ['Interstellar','Gran Torino','Iron Man']
var cinema = [categoria, film] // al suo interno abbiamo i due array precedenti
console.log(cinema[0][1]) //Horror
console.log(cinema[1][2]) //Iron Man

//Permette aggiungere un elemento all'interno di un array
film.push('Star Wars')

//Eliminare un elemento all'interno di un array
var indice = film.indexOf('Gran Torino') //1
if(indice > -1){
    film.splice(indice, 1)
}

//trasformare un array a testo
var film_string = film.join()

//trasformare un testo in un array
var testo = 'ciao,hello,hola'
var testo_in_array = testo.split(',')

//Ordinare un array in ordine alfabetico
film.sort()

//Ordinare un array al contrario
film.reverse()

//Un altro modo di ritornare tutti gli elementi di un array
var nomi = ['Gian','Federico','Luca','Matteo','Luigi']
for(let nome in nomi){
    console.log(nomi[nome])
}

//Cercare all'interno di un array
var linguaggi = ['Javascript','Php','Python','Go','Java','C++']
linguaggi.find(function(linguaggio){
    return linguaggio == 'Javascript'
})
//Si può ridurre grazie alle arrow function
linguaggi.find(linguaggio => linguaggio == 'Javascript')