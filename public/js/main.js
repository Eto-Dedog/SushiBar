// навигация
let headerAuth = document.querySelector('.header__auth')
let headerNav = document.querySelector('.header__nav')
let headerNavLinks = document.querySelectorAll('.header__nav__link')
function hide () {
    if (pageYOffset > 89) {
        headerNav.style.marginTop = '-120px'
        headerNav.style.background = '#fbf4eb'
        headerNav.style.marginLeft = "-1300px"
        headerNav.style.paddingLeft = "1000px"
        headerNav.style.paddingRight = "1000px"
        for (let headerNavLink of headerNavLinks) {
            headerNavLink.style.color = "#000000"
            headerNavLink.transition = '0.8s'
            headerNavLink.style.padding = "5px"
            headerNavLink.style.margin = "15px"
        }
    } else if (pageYOffset < 90) {
        headerNav.style.marginTop = '0px'
        headerNav.style.background = 'transparent'
        headerAuth.style.transition = '0.5s'
        headerNav.style.transition = '0.5s'
        headerNav.style.marginLeft = "-300px"
        headerNav.style.paddingLeft = "0px"
        headerNav.style.paddingRight = "0px"
        for (let headerNavLink of headerNavLinks) {
            headerNavLink.style.color = "#ffffff"
            headerNavLink.transition = '0.8s'
        }
    }
}
setInterval(hide)

// прокрутка вверх
document.addEventListener('DOMContentLoaded', () => {
    let toTopBtn = document.querySelector('.up');
    window.onscroll = function () {
        if (window.pageYOffset > 580) {
            toTopBtn.style.display = 'flex'
        } else {
            toTopBtn.style.display = 'none'
        }
    }
    toTopBtn.addEventListener('click', function () {
        window.scrollBy({
            top: -document.documentElement.scrollHeight,
            behavior: 'smooth'
        });
    });
});
// mailing
const modalBtnsMail = document.querySelectorAll('.mailing')
const modalMail = document.querySelector('.modal__newsletters')
const overlayMail = modalMail.querySelector('.modal__newsletters__overlay')
const modalCloseMail = modalMail.querySelector('.modal__close')

modalBtnsMail.forEach(elem =>  {
  elem.addEventListener('click', () => {
    modalMail.classList.remove('d-none')
  })
});
overlayMail.addEventListener('click', () => {
    modalMail.classList.add('d-none')
})
modalCloseMail.addEventListener('click', () => {
    modalMail.classList.add('d-none')
})
// reg and log
const modalBtnsAuth = document.querySelectorAll('.authorization')
const modalAuth = document.querySelector('.modal__user')
const overlayAuth = modalAuth.querySelector('.modal__user__overlay')
const modalCloseAuth = modalAuth.querySelector('.modal__close')

modalBtnsAuth.forEach(elem =>  {
  elem.addEventListener('click', () => {
    modalAuth.classList.remove('d-none')
  })
});
overlayAuth.addEventListener('click', () => {
    modalAuth.classList.add('d-none')
})
modalCloseAuth.addEventListener('click', () => {
    modalAuth.classList.add('d-none')
})
const userBtns = document.querySelectorAll('.modal__user__btn');
const userFormAuth = document.querySelectorAll('.form-user');
for (let i = 0; i < userBtns.length; i++) {
    userBtns[i].addEventListener('click', function() {
    for (let i = 0; i < userFormAuth.length; i++) {
    userFormAuth[i].classList.add('d-none');
    }
    userFormAuth[i].classList.remove('d-none');
  });
}
for (let i = 0; i < userBtns.length; i++) {
    userBtns[i].addEventListener('click', function() {
    for (let i = 0; i < userFormAuth.length; i++) {
    userBtns[i].classList.remove('modal__user__btn-active');
    }
    userBtns[i].classList.add('modal__user__btn-active');
  });
}
// burger
const modalBtnsBurger = document.querySelectorAll('.burger')
const modalBurger = document.querySelector('.modal__burger')
const overlayBurger = modalBurger.querySelector('.modal__burger__overlay')
const modalCloseBurger = modalBurger.querySelector('.modal__close')
const dopBtnClose = modalBurger.querySelector('.auth-burger')

modalBtnsBurger.forEach(elem =>  {
  elem.addEventListener('click', () => {
    modalBurger.classList.remove('d-none')
  })
});
overlayBurger.addEventListener('click', () => {
    modalBurger.classList.add('d-none')
})
modalCloseBurger.addEventListener('click', () => {
    modalBurger.classList.add('d-none')
})
dopBtnClose.addEventListener('click', () => {
    modalBurger.classList.add('d-none')
})
// info-one
const modalBtnsInfoOne = document.querySelectorAll('.info-one')
const modalInfoOne = document.querySelector('.modal__info-one')
const overlayInfoOne = modalInfoOne.querySelector('.modal__info__overlay-one')
const modalCloseInfoOne = modalInfoOne.querySelector('.modal__close')

modalBtnsInfoOne.forEach(elem =>  {
    elem.addEventListener('click', () => {
    modalInfoOne.classList.remove('d-none')
  })
});
overlayInfoOne.addEventListener('click', () => {
    modalInfoOne.classList.add('d-none')
})
modalCloseInfoOne.addEventListener('click', () => {
    modalInfoOne.classList.add('d-none')
})
// info-two
const modalBtnsInfoTwo = document.querySelectorAll('.info-two')
const modalInfoTwo = document.querySelector('.modal__info-two')
const overlayInfoTwo = modalInfoTwo.querySelector('.modal__info__overlay-two')
const modalCloseInfoTwo = modalInfoTwo.querySelector('.modal__close')

modalBtnsInfoTwo.forEach(elem =>  {
    elem.addEventListener('click', () => {
    modalInfoTwo.classList.remove('d-none')
  })
});
overlayInfoTwo.addEventListener('click', () => {
    modalInfoTwo.classList.add('d-none')
})
modalCloseInfoTwo.addEventListener('click', () => {
    modalInfoTwo.classList.add('d-none')
})

