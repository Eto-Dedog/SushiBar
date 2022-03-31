const setsBtns = document.querySelectorAll('.sets__nav__btn')
const setsItem = document.querySelectorAll('.sets__slide')
setsBtns[0].addEventListener('click', () => {
    setsBtns[0].classList.add('sets__active')
    setsBtns[1].classList.remove('sets__active')
    setsBtns[2].classList.remove('sets__active')
    setsItem[0].classList.remove('d-none')
    setsItem[1].classList.add('d-none')
    setsItem[2].classList.add('d-none')
});
setsBtns[1].addEventListener('click', () => {
  setsBtns[0].classList.remove('sets__active')
  setsBtns[1].classList.add('sets__active')
  setsBtns[2].classList.remove('sets__active')
  setsItem[0].classList.add('d-none')
  setsItem[1].classList.remove('d-none')
  setsItem[2].classList.add('d-none')
});
setsBtns[2].addEventListener('click', () => {
  setsBtns[0].classList.remove('sets__active')
  setsBtns[1].classList.remove('sets__active')
  setsBtns[2].classList.add('sets__active')
  setsItem[0].classList.add('d-none')
  setsItem[1].classList.add('d-none')
  setsItem[2].classList.remove('d-none')
});