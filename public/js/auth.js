// inputs
const inputOne = document.querySelector('#reg-pass')
const inputTwo = document.querySelector('#password-confirm')
inputOne.onchange = () => {
    inputTwo.value = inputOne.value;
}
