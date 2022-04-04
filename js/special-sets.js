const setsBtns = document.querySelectorAll('.sets__nav__btn');
const setsItem = document.querySelectorAll('.sets__slide');

for (let i = 0; i < setsBtns.length; i++) {
  setsBtns[i].addEventListener('click', function() {
    for (let i = 0; i < setsItem.length; i++) {
      setsItem[i].classList.add('d-none');
    }
    setsItem[i].classList.remove('d-none');
  });
}
for (let i = 0; i < setsBtns.length; i++) {
  setsBtns[i].addEventListener('click', function() {
    for (let i = 0; i < setsItem.length; i++) {
      setsBtns[i].classList.remove('sets__active');
    }
    setsBtns[i].classList.add('sets__active');
  });
}