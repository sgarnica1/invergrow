//Show hide product Pop Up


const closePopUpBttn = document.querySelector('.close_popup_bttn');
const productPopUp = document.querySelector('.pop_up-product');

const closePopUpProduct = () => {
  productPopUp.classList.add('hide');
  document.body.classList.remove('block-scroll');
  document.addEventListener('keyup', (key) => {
    if(key.keyCode === 27) {
      closePopUpProduct();
    }
  })
}

const showPopUpProduct = () => {
  for(let img of prodcutImg) {
    for(let i of img.children) {
      i.addEventListener('click', () => {
        if(i.className.includes('img_front')) {
          productPopUp.classList.remove('hide');
          document.body.classList.add('block-scroll');
          productPopUp.children[1].src = i.src
          productPopUp.children[1].alt = i.alt
        }
      })
    }
  }
}

window.onload = () => {
  if(document.body.offsetWidth > 900) {
    showPopUpProduct();
    closePopUpBttn.addEventListener('click', closePopUpProduct)
  }
}