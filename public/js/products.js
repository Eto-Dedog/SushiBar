const sortsBtns = document.querySelectorAll('.sorts__category-btn')
const sortsBox = document.querySelectorAll('.account__sorts-cards')

for (let i = 0; i < sortsBtns.length; i++) {
    sortsBtns[i].addEventListener('click', function() {
        for (let i = 0; i < sortsBox.length; i++) {
            sortsBox[i].classList.add('d-none');
        }
        sortsBox[i].classList.remove('d-none');
    });
}
for (let i = 0; i < sortsBtns.length; i++) {
    sortsBtns[i].addEventListener('click', function() {
        for (let i = 0; i < sortsBox.length; i++) {
            sortsBtns[i].classList.remove('sorts__category-btn-active');
        }
        sortsBtns[i].classList.add('sorts__category-btn-active');
    });
}
