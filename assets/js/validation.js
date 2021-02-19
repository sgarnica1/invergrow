const inputs = document.querySelectorAll('input');
const textarea = document.querySelector('textarea');
const inputArray = [...inputs];
inputArray.pop();
inputArray.push(textarea);

const submit = document.getElementById('submit_bttn');
const errorMsg = document.querySelector('.error_message');

const emailInputContainer = document.querySelector('.input_container.email');

const validation = () => {
  let inputValues = [];
  for(let i of inputArray) {
    if(i.value == '') {
      i.parentElement.classList.add('error');
      errorMsg.style.display = 'inline-block';
      inputValues.push(i.value)
    } else {
      i.parentElement.classList.remove('error');
      inputValues.push(i.value)
    }
  }
  if(inputValues.includes('')) {
    errorMsg.style.display = 'inline-block';
  } else {
    errorMsg.style.display = 'none';
  }
}

const emailInputValidation = () => {
  const emailValue = emailInputContainer.firstElementChild.value;
  const emailLabel = emailInputContainer.lastElementChild;
  if(emailValue !== '') {
    emailLabel.classList.add('text_included')
  } else {
    emailLabel.classList.remove('text_included')
  }
}

emailInputContainer.firstElementChild.addEventListener('focus', () => {
  emailInputValidation();
})
emailInputContainer.firstElementChild.addEventListener('focusout', () => {
  emailInputValidation();
})

submit.addEventListener('click', (event) => {
  event.preventDefault();
  validation();
})

