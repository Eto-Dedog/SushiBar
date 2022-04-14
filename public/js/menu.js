const btnsMenu = document.querySelectorAll('.categories__card')
const productBox = document.querySelectorAll('.product__cards')
for (let i = 0; i < btnsMenu.length; i++) {
    btnsMenu[i].addEventListener('click', function() {
        for (let i = 0; i < productBox.length; i++) {
            productBox[i].classList.add('d-none');
        }
        productBox[i].classList.remove('d-none');
    });
}

btnsMenu[0].classList.add('categories__card-active')

btnsMenu[0].addEventListener('click', function (){
    btnsMenu[0].classList.add('categories__card-active')
    btnsMenu[1].classList.remove('categories__card-active')
    btnsMenu[2].classList.remove('categories__card-active')
    btnsMenu[3].classList.remove('categories__card-active')
    btnsMenu[4].classList.remove('categories__card-active')
    btnsMenu[5].classList.remove('categories__card-active')
    btnsMenu[6].classList.remove('categories__card-active')
    btnsMenu[7].classList.remove('categories__card-active')

})

btnsMenu[1].addEventListener('click', function (){
    btnsMenu[1].classList.add('categories__card-active')
    btnsMenu[0].classList.remove('categories__card-active')
    btnsMenu[2].classList.remove('categories__card-active')
    btnsMenu[3].classList.remove('categories__card-active')
    btnsMenu[4].classList.remove('categories__card-active')
    btnsMenu[5].classList.remove('categories__card-active')
    btnsMenu[6].classList.remove('categories__card-active')
    btnsMenu[7].classList.remove('categories__card-active')
})

btnsMenu[2].addEventListener('click', function (){
    btnsMenu[2].classList.add('categories__card-active')
    btnsMenu[0].classList.remove('categories__card-active')
    btnsMenu[1].classList.remove('categories__card-active')
    btnsMenu[3].classList.remove('categories__card-active')
    btnsMenu[4].classList.remove('categories__card-active')
    btnsMenu[5].classList.remove('categories__card-active')
    btnsMenu[6].classList.remove('categories__card-active')
    btnsMenu[7].classList.remove('categories__card-active')
})

btnsMenu[3].addEventListener('click', function (){
    btnsMenu[3].classList.add('categories__card-active')
    btnsMenu[0].classList.remove('categories__card-active')
    btnsMenu[1].classList.remove('categories__card-active')
    btnsMenu[2].classList.remove('categories__card-active')
    btnsMenu[4].classList.remove('categories__card-active')
    btnsMenu[5].classList.remove('categories__card-active')
    btnsMenu[6].classList.remove('categories__card-active')
    btnsMenu[7].classList.remove('categories__card-active')
})

btnsMenu[4].addEventListener('click', function (){
    btnsMenu[4].classList.add('categories__card-active')
    btnsMenu[0].classList.remove('categories__card-active')
    btnsMenu[1].classList.remove('categories__card-active')
    btnsMenu[2].classList.remove('categories__card-active')
    btnsMenu[3].classList.remove('categories__card-active')
    btnsMenu[5].classList.remove('categories__card-active')
    btnsMenu[6].classList.remove('categories__card-active')
    btnsMenu[7].classList.remove('categories__card-active')
})

btnsMenu[5].addEventListener('click', function (){
    btnsMenu[5].classList.add('categories__card-active')
    btnsMenu[0].classList.remove('categories__card-active')
    btnsMenu[1].classList.remove('categories__card-active')
    btnsMenu[2].classList.remove('categories__card-active')
    btnsMenu[3].classList.remove('categories__card-active')
    btnsMenu[4].classList.remove('categories__card-active')
    btnsMenu[6].classList.remove('categories__card-active')
    btnsMenu[7].classList.remove('categories__card-active')
})

btnsMenu[6].addEventListener('click', function (){
    btnsMenu[6].classList.add('categories__card-active')
    btnsMenu[0].classList.remove('categories__card-active')
    btnsMenu[1].classList.remove('categories__card-active')
    btnsMenu[2].classList.remove('categories__card-active')
    btnsMenu[3].classList.remove('categories__card-active')
    btnsMenu[4].classList.remove('categories__card-active')
    btnsMenu[5].classList.remove('categories__card-active')
    btnsMenu[7].classList.remove('categories__card-active')
})

btnsMenu[7].addEventListener('click', function (){
    btnsMenu[7].classList.add('categories__card-active')
    btnsMenu[0].classList.remove('categories__card-active')
    btnsMenu[1].classList.remove('categories__card-active')
    btnsMenu[2].classList.remove('categories__card-active')
    btnsMenu[3].classList.remove('categories__card-active')
    btnsMenu[4].classList.remove('categories__card-active')
    btnsMenu[5].classList.remove('categories__card-active')
    btnsMenu[6].classList.remove('categories__card-active')
})




