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

// for (let i = 0; i < sortsBtns.length; i++) {
//     sortsBtns[i].addEventListener('click', function() {
//         for (let i = 0; i < sortsBox.length; i++) {
//             sortsBtns[i].classList.remove('.sorts__category-btn-active');
//         }
//         sortsBtns[i].classList.add('.sorts__category-btn-active');
//     });
// }

// sortsBtns[0].classList.add('sorts__category-btn-active')
//
// sortsBtns[0].addEventListener('click', function (){
//     sortsBtns[0].classList.add('sorts__category-btn-active')
//     sortsBtns[1].classList.remove('sorts__category-btn-active')
//     sortsBtns[2].classList.remove('sorts__category-btn-active')
//     sortsBtns[3].classList.remove('sorts__category-btn-active')
//     sortsBtns[4].classList.remove('sorts__category-btn-active')
//     sortsBtns[5].classList.remove('sorts__category-btn-active')
//     sortsBtns[6].classList.remove('sorts__category-btn-active')
//     sortsBtns[7].classList.remove('sorts__category-btn-active')
//
// })
//
// sortsBtns[1].addEventListener('click', function (){
//     sortsBtns[1].classList.add('sorts__category-btn-active')
//     sortsBtns[0].classList.remove('sorts__category-btn-active')
//     sortsBtns[2].classList.remove('sorts__category-btn-active')
//     sortsBtns[3].classList.remove('sorts__category-btn-active')
//     sortsBtns[4].classList.remove('sorts__category-btn-active')
//     sortsBtns[5].classList.remove('sorts__category-btn-active')
//     sortsBtns[6].classList.remove('sorts__category-btn-active')
//     sortsBtns[7].classList.remove('sorts__category-btn-active')
// })
//
// sortsBtns[2].addEventListener('click', function (){
//     sortsBtns[2].classList.add('sorts__category-btn-active')
//     sortsBtns[0].classList.remove('sorts__category-btn-active')
//     sortsBtns[1].classList.remove('sorts__category-btn-active')
//     sortsBtns[3].classList.remove('sorts__category-btn-active')
//     sortsBtns[4].classList.remove('sorts__category-btn-active')
//     sortsBtns[5].classList.remove('sorts__category-btn-active')
//     sortsBtns[6].classList.remove('sorts__category-btn-active')
//     sortsBtns[7].classList.remove('sorts__category-btn-active')
// })

// sortsBtns[3].addEventListener('click', function (){
//     sortsBtns[3].classList.add('sorts__category-btn-active')
//     sortsBtns[0].classList.remove('sorts__category-btn-active')
//     sortsBtns[1].classList.remove('sorts__category-btn-active')
//     sortsBtns[2].classList.remove('sorts__category-btn-active')
//     sortsBtns[4].classList.remove('sorts__category-btn-active')
//     sortsBtns[5].classList.remove('sorts__category-btn-active')
//     sortsBtns[6].classList.remove('sorts__category-btn-active')
//     sortsBtns[7].classList.remove('sorts__category-btn-active')
// })
//
// sortsBtns[4].addEventListener('click', function (){
//     sortsBtns[4].classList.add('sorts__category-btn-active')
//     sortsBtns[0].classList.remove('sorts__category-btn-active')
//     sortsBtns[1].classList.remove('sorts__category-btn-active')
//     sortsBtns[2].classList.remove('sorts__category-btn-active')
//     sortsBtns[3].classList.remove('sorts__category-btn-active')
//     sortsBtns[5].classList.remove('sorts__category-btn-active')
//     sortsBtns[6].classList.remove('sorts__category-btn-active')
//     sortsBtns[7].classList.remove('sorts__category-btn-active')
// })
//
// sortsBtns[5].addEventListener('click', function (){
//     sortsBtns[5].classList.add('sorts__category-btn-active')
//     sortsBtns[0].classList.remove('sorts__category-btn-active')
//     sortsBtns[1].classList.remove('sorts__category-btn-active')
//     sortsBtns[2].classList.remove('sorts__category-btn-active')
//     sortsBtns[3].classList.remove('sorts__category-btn-active')
//     sortsBtns[4].classList.remove('sorts__category-btn-active')
//     sortsBtns[6].classList.remove('sorts__category-btn-active')
//     sortsBtns[7].classList.remove('sorts__category-btn-active')
// })
//
// sortsBtns[6].addEventListener('click', function (){
//     sortsBtns[6].classList.add('sorts__category-btn-active')
//     sortsBtns[0].classList.remove('sorts__category-btn-active')
//     sortsBtns[1].classList.remove('sorts__category-btn-active')
//     sortsBtns[2].classList.remove('sorts__category-btn-active')
//     sortsBtns[3].classList.remove('sorts__category-btn-active')
//     sortsBtns[4].classList.remove('sorts__category-btn-active')
//     sortsBtns[5].classList.remove('sorts__category-btn-active')
//     sortsBtns[7].classList.remove('sorts__category-btn-active')
// })
//
// sortsBtns[7].addEventListener('click', function (){
//     sortsBtns[7].classList.add('sorts__category-btn-active')
//     sortsBtns[0].classList.remove('sorts__category-btn-active')
//     sortsBtns[1].classList.remove('sorts__category-btn-active')
//     sortsBtns[2].classList.remove('sorts__category-btn-active')
//     sortsBtns[3].classList.remove('sorts__category-btn-active')
//     sortsBtns[4].classList.remove('sorts__category-btn-active')
//     sortsBtns[5].classList.remove('sorts__category-btn-active')
//     sortsBtns[6].classList.remove('sorts__category-btn-active')
// })
