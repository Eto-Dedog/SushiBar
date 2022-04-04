const btnsAccount = document.querySelectorAll('.btn__account')
const userfulBox = document.querySelectorAll('.account__useful')

for (let i = 0; i < btnsAccount.length; i++) {
  btnsAccount[i].addEventListener('click', function() {
    for (let i = 0; i < userfulBox.length; i++) {
      userfulBox[i].classList.add('d-none');
    }
    userfulBox[i].classList.remove('d-none');
  });
}
for (let i = 0; i < btnsAccount.length; i++) {
  btnsAccount[i].addEventListener('click', function() {
    for (let i = 0; i < userfulBox.length; i++) {
      btnsAccount[i].classList.remove('btn__account-active');
    }
    btnsAccount[i].classList.add('btn__account-active');
  });
}