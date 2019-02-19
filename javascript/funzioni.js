/*
Le funzioni possono avere anche parametri opzionali, basta assegnargli un valore di default
*/
function saluto(nome, show = false){
    if( show== false){
        console.log(`Cioa ${nome}`) 
    } else{
        document.write(`Ciao ${nome}`)
    }
}
saluto(nome)


/*
Le funzioni al loro interno possono avere altre funzioni in modo tale da essere più ordinati
*/
function saluto(nome, show = false){
    if(show== false){
        tramiteConsole(nome)
    } else{
        tramiteWrite(nome)
    }
}
function tramiteConsole(nome){
    console.log(`Ciao ${nome}`)
}
function tramiteWrite(nome){
    document.write(`Ciao ${nome}`)
}
function saluto('gian',true)

/*
Parametro rest e spread
Rest ...
*/

function listaFrutta(fruttaUno, fruttaDue, ...altra_frutta){
    console.log(`Frutta uno: ${fruttaUno}`)
    console.log(`Frutta due: ${fruttaDue}`)
    console.log(`Altra frutta ${altra_frutta}`)
}
listaFrutta('Arancia','Mela', 'Anguria','Pera','Melone','Cocco')
var frutti = ['Arancia','Mela']
listaFrutta(...frutti, 'Anguria','Pera','Melone','Cocco')

/*
Funzioni anonime: è una funzione che non ha un nome
*/
var film = function (nome) {
    return `il film è ${nome}`
}
film('prova')

/*
Arrow function
*/