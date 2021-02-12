const menuBttn = document.querySelector('.menu-btn');
const closeBttn = document.querySelector('.cancel-btn');
const nav = document.querySelector('.navbar_list');
const header = document.querySelector('.header');
const logo = document.querySelector('.navbar_logo').firstElementChild;
const navBarSubMenu = document.querySelector('.navbar_submenu_parent');
const subMenu = document.querySelector('.navbar_submenu');
const menuLinks = document.querySelectorAll('.navbar_list_item');
const subMenuDropBttn = document.getElementById('dropdown-menu');
const topBttn = document.getElementById('top-bttn');
const whatsAppBttn = document.getElementById('whatsapp-bttn');
const footerCopywright = document.querySelector('.footer_copywright').firstElementChild;
const carouselImg = document.querySelectorAll('.carousel_img');
const fb = document.querySelector('.facebook');
const ig = document.querySelector('.instagram');

const scrollChangeTextColor = () => {
  for(let el of menuLinks) {
    el.firstElementChild.classList.add('toggle')
  }
}

const changeTextColor = () => {
  for(let el of menuLinks) {
    el.firstElementChild.classList.remove('toggle')
  }
};

const showBttns = () => {
  topBttn.classList.remove('hide');
  whatsAppBttn.classList.remove('hidew');
};

const hideBttns = () => {
  topBttn.classList.add('hide');
  whatsAppBttn.classList.add('hidew');
}

window.onscroll = () => {
  // this.scrollY > 20 ? header.classList.add('sticky') : header.classList.remove('sticky')
  if(this.scrollY > 20) {
    header.classList.add('sticky');
    logo.src = "./assets/logo/invergrow_logo_recortado.png";
    menuBttn.firstElementChild.style.backgroundImage = "url('./assets/icon/menu.svg')"
    // menuBttn.firstElementChild.style.backgroundImage = "url('./assets/icon/menu.svg')"
    menuLinks[0].firstElementChild.classList.add('active');
    subMenuDropBttn.style.color = "var(--main-font-color)"
    scrollChangeTextColor();
  } else {
    header.classList.remove('sticky');
    logo.src = "./assets/logo/invergrow_logo_recortado_blanco.png";
    menuBttn.firstElementChild.style.backgroundImage = "url('./assets/icon/menu_white.svg')"
    subMenuDropBttn.style.color = "white"
    changeTextColor();
  }
  // this.scrollY > 150 ? topBttn.classList.remove('hide') : topBttn.classList.add('hide');
  if (this.scrollY > 150) {
    if(nav.className.includes('active')) {
      hideBttns();
    } else {
      showBttns();
    }
  } else {
    hideBttns();
  }
}

whatsAppBttn.addEventListener('mouseover', () => {
  whatsAppBttn.firstElementChild.firstElementChild.src = './assets/icon/whatsapp_1.svg';
})
whatsAppBttn.addEventListener('mouseout', () => {
  whatsAppBttn.firstElementChild.firstElementChild.src = './assets/icon/whatsapp_2.svg';
})

menuBttn.addEventListener('click', () => {
  nav.classList.add('active');
  hideBttns();
  subMenuDropBttn.style.color = "white";
})

closeBttn.addEventListener('click', () => {
  nav.classList.remove('active');
  subMenu.classList.add('hide');
  fb.style.display = "inline-block";
  ig.style.display = "inline-block";
  if (this.scrollY > 150) {
    showBttns();
  }
})
navBarSubMenu.addEventListener('click', () => {
  subMenu.classList.toggle('hide');
  if(subMenu.className.includes('hide')) {
    subMenuDropBttn.style.color = "white"
    subMenuDropBttn.classList.remove('fa-angle-up');
    subMenuDropBttn.classList.add('fa-angle-down');
    fb.style.display = "inline-block";
    ig.style.display = "inline-block";
  } else {
    subMenuDropBttn.style.color = "var(--extra-color)"
    subMenuDropBttn.classList.remove('fa-angle-down');
    subMenuDropBttn.classList.add('fa-angle-up');
    fb.parentElement.style.position = "relative";
  }
})

const setDate = () => {
  const date = new Date();
  const year = date.getFullYear();
  footerCopywright.textContent = `Copyright © ${year} Invergrow | Soluciones Agrícolas`;
  return year
}

setDate();

const colorImage = () => {
  let counter = 1;
  for(let img of carouselImg) {
    let imgNum = img.className;
    if(imgNum.includes(`img${counter}`)) {
      img.src = `./assets/img/brands_logos/b_${counter}_c.jpg`
    }
    counter++;
  }
}

navBarSubMenu.addEventListener('mouseover', () => {
  header.classList.add('sticky');
  logo.src = "./assets/logo/invergrow_logo_recortado.png";
  menuBttn.firstElementChild.style.backgroundImage = "url('./assets/icon/menu.svg')"
  menuBttn.firstElementChild.style.backgroundImage = "url('./assets/icon/menu.svg')"
  menuLinks[0].firstElementChild.classList.add('active');
  subMenuDropBttn.style.color = "var(--tertiary-font-color)"
  subMenuDropBttn.classList.remove('fa-angle-down');
  subMenuDropBttn.classList.add('fa-angle-up');
  scrollChangeTextColor();
})

navBarSubMenu.addEventListener('mouseout', () => {
  subMenuDropBttn.classList.add('fa-angle-down');
  subMenuDropBttn.classList.remove('fa-angle-up');
  if(this.scrollY > 20) {
    subMenuDropBttn.style.color = "var(--main-font-color)";
  }
  if(this.scrollY < 20) {
    header.classList.remove('sticky');
    logo.src = "./assets/logo/invergrow_logo_recortado_blanco.png";
    menuBttn.firstElementChild.style.backgroundImage = "url('./assets/icon/menu_white.svg')"
    subMenuDropBttn.style.color = "white"
    changeTextColor();
  }
})