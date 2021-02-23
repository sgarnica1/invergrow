const inputs = document.querySelectorAll('input');
const textarea = document.querySelector('textarea');
const inputArray = [...inputs];
inputArray.pop();
inputArray.push(textarea);
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const subjectInput = document.getElementById('subject');

const submit = document.getElementById('submit_bttn');
const errorMsg = document.querySelector('.error_message');
const successMsg = document.querySelector('.success_message');
const form = document.querySelector('form');

const emailInputContainer = document.querySelector('.input_container.email');

const validation = () => {
  let inputValues = [];
  let nameSuccessful = false;
  let emailSuccessful = false;
  let phoneSuccessful = false;
  let subjectSuccessful = false;
  let messageSuccessful= false;
  const emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  const phoneRegex = /^\d{10,10}$/i;

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

  if(nameInput.value !== '') {
    nameSuccessful = true;
  } else {
    nameSuccessful = false;
  }
  if(emailRegex.test(emailInput.value)) {
    emailSuccessful = true;
  } else {
    emailInput.parentElement.classList.add('error');
    errorMsg.style.display = 'inline-block';
    emailSuccessful = false;
  }
  if(phoneRegex.test(phoneInput.value)) {
    phoneSuccessful = true;
  } else {
    phoneInput.parentElement.classList.add('error');
    errorMsg.style.display = 'inline-block';
    phoneSuccessful = false;
  }

  if(subjectInput.value !== '') {
    subjectSuccessful = true;
  } else {
    subjectSuccessful = false;
  }
  if(textarea.value !== '') {
    messageSuccessful = true;
  } else {
    messageSuccessful = false;
  }

  if(
    nameSuccessful &&
    emailSuccessful == true &&
    phoneSuccessful &&
    subjectSuccessful &&
    messageSuccessful
  ){
    for(let i of inputArray) {
      i.value = '';
    }
    console.log('Sending...')
    successMsg.style.display = 'inline-block';
    const form = document.querySelector('form');
    form.classList.remove('prevent')
  }
}


// form.addEventListener('submit', (event) => {
//   validation();

//   const form = document.querySelector('form')
//   if(form.className.includes('prevent')) {
//     event.preventDefault();
//   }
// })



/*Validate if there is text in the input, not if it is an email*/
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