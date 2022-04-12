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
for (let i = 0; i < btnsMenu.length; i++) {
    btnsMenu[i].addEventListener('click', function() {
        for (let i = 0; i < productBox.length; i++) {
            btnsMenu[i].classList.remove('categories__card-active');
        }
        btnsMenu[i].classList.add('categories__card-active');
    });
}
