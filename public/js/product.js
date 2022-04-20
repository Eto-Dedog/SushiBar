let comments = document.querySelectorAll('.comment__post')
let commentsNum = document.querySelector('.reviews__title-num')
commentsNum.innerHTML = comments.length

const btnsStar = document.querySelectorAll('.reviews__form__box .stars')
const ratingInput = document.querySelector('.rating-input')
console.log(ratingInput)
btnsStar[0].classList.add('active-star')

for (let i = 0; i < btnsStar.length; i++) {
    btnsStar[i].addEventListener('click', function() {
        for (let i = 0; i < btnsStar.length; i++) {
            btnsStar[i].classList.remove('active-star');
        }
        btnsStar[i].classList.add('active-star');
    });
}

btnsStar[0].addEventListener('click', function() {
    ratingInput.innerHTML = 1;
    ratingInput.value = 1;
})
btnsStar[1].addEventListener('click', function() {
    ratingInput.innerHTML = 2;
    ratingInput.value = 2;
})
btnsStar[2].addEventListener('click', function() {
    ratingInput.innerHTML = 3;
    ratingInput.value = 3;
})
btnsStar[3].addEventListener('click', function() {
    ratingInput.innerHTML = 4;
    ratingInput.value = 4;
})
btnsStar[4].addEventListener('click', function() {
    ratingInput.innerHTML = 5;
    ratingInput.value = 5;
})
