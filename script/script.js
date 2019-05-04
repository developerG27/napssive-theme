let burgherMenu = document.querySelector('#app-menu')
let menu = document.querySelector("#menu");
burgherMenu.addEventListener('click', () => {
  menu.classList.toggle("visible");
})
