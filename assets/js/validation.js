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

let nameSuccess = false;
let emailSuccess = false;
let phoneSuccess = false;
let subjectSuccess = false;
let msgSuccess= false;

const nameValidation = () => {
  if(nameInput.value == '') {
    nameInput.parentElement.classList.add('error');
    errorMsg.style.display = 'block';
  } else {
    nameInput.parentElement.classList.remove('error');
    nameSuccess = true;
    console.log(nameSuccess)
  }
}
const mailValidation = () => {
  if(!emailRegex.test(emailInput.value)) {
    emailInput.parentElement.classList.add('error');
    errorMsg.style.display = 'block';
  } else {
    emailInput.parentElement.classList.remove('error');
    emailSuccess = true;
    console.log(emailSuccess)
  }
}
const phoneValidation = () => {
  if(!phoneRegex.test(phoneInput.value)) {
    phoneInput.parentElement.classList.add('error');
    errorMsg.style.display = 'block';
  } else {
    phoneInput.parentElement.classList.remove('error');
    phoneSuccess = true;
    console.log(phoneSuccess)
  }
}
const subjectValidation = () => {
  if(subjectInput.value == '') {
    subjectInput.parentElement.classList.add('error');
    errorMsg.style.display = 'block';
  } else {
    subjectInput.parentElement.classList.remove('error');
    subjectSuccess = true;
    console.log(subjectSuccess)
  }
}
const msgValidation = () => {
  if(messageInput.value == '') {
    messageInput.parentElement.classList.add('error');
    errorMsg.style.display = 'block';
  } else {
    messageInput.parentElement.classList.remove('error');
    msgSuccess = true;
    console.log(msgSuccess)
  }
}


const validation = () => {
  nameValidation();
  mailValidation();
  phoneValidation();
  subjectValidation();
  msgValidation();
  if(
    nameSuccess == true &&
    emailSuccess == true &&
    phoneSuccess == true &&
    subjectSuccess == true &&
    msgSuccess == true
  ) {
    return true
  } else {
    return false
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