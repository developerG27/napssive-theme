// var $ = jQuery;
// $(document).ready(function(){
//     console.log('ready')

//     $('#app-menu').on('click',function(){
//         console.log('hai fatto click')

//         $('#secondary-menu').toggleClass('none');
//     })
// })

let burgherMenu = document.querySelector('#app-menu')
let menu = document.querySelector("#menu");
burgherMenu.addEventListener('click', () => {
  menu.classList.toggle("visible");
})
