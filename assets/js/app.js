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

const carouselBttnNextPrev = document.querySelectorAll('.carousel_bttn');
const prodcutImg = document.querySelectorAll('.product_img')
const closePopUpBttn = document.querySelector('.close_popup_bttn');
const productPopUp = document.querySelector('.pop_up-product');

window.onscroll = () => {
  // this.scrollY > 20 ? header.classList.add('sticky') : header.classList.remove('sticky')
  if(this.scrollY > 20) {
    header.classList.add('sticky');
    logo.src = "./assets/logo/invergrow_logo_recortado.png";
    menuBttn.firstElementChild.style.backgroundImage = "url('./assets/icon/menu.svg')"
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


//WhatsApp and To Top Bttn Show and Hide
const showBttns = () => {
  topBttn.classList.remove('hide');
  whatsAppBttn.classList.remove('hidew');
};

const hideBttns = () => {
  topBttn.classList.add('hide');
  whatsAppBttn.classList.add('hidew');
}


//Mobile Menu
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


//Submenu
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


//WhastApp bttn
whatsAppBttn.addEventListener('mouseover', () => {
  whatsAppBttn.firstElementChild.firstElementChild.src = './assets/icon/whatsapp_1.svg';
})
whatsAppBttn.addEventListener('mouseout', () => {
  whatsAppBttn.firstElementChild.firstElementChild.src = './assets/icon/whatsapp_2.svg';
})


//Footer Date
const setDate = () => {
  const date = new Date();
  const year = date.getFullYear();
  footerCopywright.textContent = `Copyright © ${year} Invergrow | Soluciones Agrícolas`;
  return year
}

setDate();


//Change carousel product image
const changeCarouselProductImg = () => {
  for(let bttn of carouselBttnNextPrev) {
    bttn.addEventListener('click', () => {
      const imgs = bttn.parentElement.children[1].children;
      for(let i of imgs) {
        if(i.className.includes('img_back')) {
          i.classList.add('img_front')
          i.classList.remove('img_back')
        } else {
          i.classList.remove('img_front')
          i.classList.add('img_back')
        }
      }
    })
  }
}
changeCarouselProductImg();

//Show hide product Pop Up
closePopUpBttn.addEventListener('click', () => {
  productPopUp.classList.add('hide');
  document.body.classList.remove('block-scroll');
})

const showPopUpProduct = () => {
  for(let img of prodcutImg) {
    img.addEventListener('click', () => {
      productPopUp.classList.remove('hide');
      document.body.classList.add('block-scroll');
      productPopUp.children[1].src = img.firstElementChild.src
    })
  }
}
showPopUpProduct();