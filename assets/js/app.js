const scrollHeader = document.querySelector('.header-scroll')
const menuBttn = document.querySelector('.menu-btn');
const menuBtns = document.querySelectorAll('.menu-btn')

const closeBttn = document.querySelector('.cancel-btn.mobile');
const nav = document.querySelector('.navbar_list.mobile');
const header = document.querySelector('.header');
const logo = document.querySelector('.navbar__logo').firstElementChild;
const navBarSubMenu = document.querySelector('.navbar_submenu_parent');
const subMenu = document.querySelector('.navbar_submenu');
const menuLinks = document.querySelectorAll('.navbar_list_item');
const phoneHeaderLink = document.querySelector('.header_phone_link');
const topBttn = document.getElementById('top-bttn');
const whatsAppBttn = document.getElementById('whatsapp-bttn');
const footerCopywright = document.querySelector('.footer_copywright').firstElementChild;
const carouselImg = document.querySelectorAll('.carousel_img');
const fb = document.querySelector('.facebook');
const ig = document.querySelector('.instagram');

const carouselBttnNextPrev = document.querySelectorAll('.carousel_bttn');
const carouselBttnNextPrevMoreImgs = document.querySelectorAll('.carousel_bttn_moreimgs');
const prodcutImg = document.querySelectorAll('.product_img');


//WhatsApp and To Top Bttn Show and Hide
const showBttns = () => {
  topBttn.classList.remove('hide');
  whatsAppBttn.classList.remove('hide');
};

const hideBttns = () => {
  topBttn.classList.add('hide');
  whatsAppBttn.classList.add('hide');
}

window.onscroll = () => {
  if (this.scrollY > 150) {
    scrollHeader.classList.add('active')
    if(nav.className.includes('active')) {
      hideBttns();
    } else {
      showBttns();
    }
  } else {
    scrollHeader.classList.remove('active')
    hideBttns();
  }
}


//Mobile Menu
for(let btn of menuBtns) {
  btn.addEventListener('click', () => {
    nav.classList.add('active');
    hideBttns();
    document.body.classList.add('block-scroll');
  })
}

closeBttn.addEventListener('click', () => {
  nav.classList.remove('active');
  fb.style.display = "inline-block";
  ig.style.display = "inline-block";
  document.body.classList.remove('block-scroll');
  if (this.scrollY > 150) {
    showBttns();
  }
})


//Footer Date
const setDate = () => {
  const date = new Date();
  const year = date.getFullYear();
  footerCopywright.textContent = `Copyright © ${year} Inveralia | Soluciones Agrícolas`;
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

//Category title animations 

// function isInViewport(element) {
//   const rect = element.getBoundingClientRect();
//   return (
//       rect.top >= 0 &&
//       rect.left >= 0 &&
//       rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//       rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//   );
// }

// const catTitles = document.querySelectorAll('.product_cat_title');
// document.addEventListener('scroll', () => {
//   for(let el of catTitles) {
//     if(el == catTitles[0]) {
//       continue
//     }
//     if(isInViewport(el) == true) {
//       el.classList.add('slide')
//     }
//   }
// })







//Close mobile menu when 'nosotros' is clicked
const navElementNosotros = document.querySelector('.nosotros_link');
navElementNosotros.addEventListener('click', () => {
  nav.classList.remove('active');
  subMenu.classList.add('hide');
  fb.style.display = "inline-block";
  ig.style.display = "inline-block";
  document.body.classList.remove('block-scroll');
  if (this.scrollY > 150) {
    showBttns();
  }
})