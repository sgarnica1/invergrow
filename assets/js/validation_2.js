const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const subjectInput = document.getElementById('subject');
const messageInput = document.querySelector('textarea');
const submit = document.getElementById('submit_bttn');
const form = document.querySelector('form');

const emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
const phoneRegex = /^\d{10,10}$/i;

const errorMsg = document.querySelector('.error_message');
const successMsg = document.querySelector('.success_message');

const inputs = document.querySelectorAll('input');
const textarea = document.querySelector('textarea');
const inputArray = [...inputs];
inputArray.pop();
inputArray.push(textarea);

const validation = () => {
  if(
    nameInput.value == '' &&
    emailInput.value == '' &&
    phoneInput.value == '' &&
    subjectInput.value == '' &&
    messageInput.value == ''
  ) {
    for(let i of inputArray) {
      i.parentElement.classList.add('error');
      errorMsg.style.display = 'inline-block';
    }
    errorMsg.style.display = 'block';
    return false
  } else {
    return true
  }
}



/*Validate if there is text in the input, not if it is an email*/
const emailInputContainer = document.querySelector('.input_container.email');
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