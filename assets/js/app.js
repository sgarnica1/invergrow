const menuBttn = document.querySelector('.menu-btn');
const closeBttn = document.querySelector('.cancel-btn');
const nav = document.querySelector('.navbar_list');
const header = document.querySelector('.header');
const logo = document.querySelector('.navbar_logo').firstElementChild;
const menuLinks = document.querySelectorAll('.navbar_list_item');
const topBttn = document.getElementById('top-bttn');
const whatsAppBttn = document.getElementById('whatsapp-bttn');
const footerCopywright = document.querySelector('.footer_copywright').firstElementChild;
const carouselImg = document.querySelectorAll('.carousel_img');

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
    menuLinks[0].firstElementChild.classList.add('active');
    scrollChangeTextColor();
  } else {
    header.classList.remove('sticky');
    logo.src = "./assets/logo/invergrow_logo_recortado_blanco.png";
    menuBttn.firstElementChild.style.backgroundImage = "url('./assets/icon/menu_white.svg')"
    changeTextColor();
  }
  // this.scrollY > 150 ? topBttn.classList.remove('hide') : topBttn.classList.add('hide');
  if (this.scrollY > 150) {
    showBttns();
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
})
closeBttn.addEventListener('click', () => {
  nav.classList.remove('active');
  if (this.scrollY > 150) {
    showBttns();
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
const uncolorImage = () => {
  let counter = 1;
  for(let img of carouselImg) {
    let imgNum = img.className;
    if(imgNum.includes(`img${counter}`)) {
      img.src = `./assets/img/brands_logos/b_${counter}_nc.jpg`
    }
    counter++;
  }
}

const changeImgColor = () => {
  for(let img of carouselImg) {
    img.addEventListener('mouseover', colorImage);
    img.addEventListener('mouseout', uncolorImage);
  }
}

changeImgColor();