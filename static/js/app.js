const menuBttn = document.querySelector('.menu-btn');
const closeBttn = document.querySelector('.cancel-btn');
const nav = document.querySelector('.navbar_list');
const header = document.querySelector('.header');
const logo = document.querySelector('.navbar_logo').firstElementChild;
const menuLinks = document.querySelectorAll('.navbar_list_item');

menuBttn.addEventListener('click', () => {
  nav.classList.add('active');
})
closeBttn.addEventListener('click', () => {
  nav.classList.remove('active');
})

const scrollChangeTextColor = () => {
  for(let el of menuLinks) {
    // if(el.firstElementChild.classList.contains('active')){
    //   continue
    // } else {
    //   el.firstElementChild.classList.add('toggle')
    // }
    el.firstElementChild.classList.add('toggle')
  }
}

const changeTextColor = () => {
  for(let el of menuLinks) {
    // if(el.firstElementChild.classList.contains('active')){
    //   continue
    // } else {
    //   el.firstElementChild.classList.remove('toggle')
    // }
    el.firstElementChild.classList.remove('toggle')
  }
}

window.onscroll = () => {
  // this.scrollY > 20 ? header.classList.add('sticky') : header.classList.remove('sticky')
  if(this.scrollY > 20) {
    header.classList.add('sticky');
    logo.src = "../static/logo/invergrow_logo_recortado.png";
    // logo.classList.add('img-sticky');
    menuBttn.firstElementChild.style.backgroundImage = "url('./static/icon/menu.svg')"
    // menuBttn.classList.add('toggle');
    menuLinks[0].firstElementChild.classList.add('active');
    scrollChangeTextColor();
  } else {
    header.classList.remove('sticky');
    logo.src = "../static/logo/invergrow_logo_recortado_blanco.png";
    // logo.classList.remove('img-sticky');
    // menuBttn.classList.remove('toggle');
    menuBttn.firstElementChild.style.backgroundImage = "url('./static/icon/menu_white.svg')"
    changeTextColor();
    // menuLinks[0].firstElementChild.classList.remove('active');
  }
}
