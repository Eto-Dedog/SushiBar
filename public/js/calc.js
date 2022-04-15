let oneCard = document.querySelector('.sets__sliede__box-one')
let oneCardsPrice = oneCard.querySelectorAll('.product__card__price')
let oneCardOldPrice = oneCard.querySelector('.sets__price__old')
let oneCardNewPrice = oneCard.querySelector('.sets__price__new')

let countOne = 0;
oneCardsPrice.forEach(function(value, index) {
    countOne += +value.textContent;
    return sumOne = countOne
});

let procentOne = 25 * sumOne / 100

oneCardOldPrice.innerHTML = sumOne
oneCardNewPrice.innerHTML = sumOne - procentOne

let twoCard = document.querySelector('.sets__sliede__box-two')
let twoCardsPrice = twoCard.querySelectorAll('.product__card__price')
let twoCardOldPrice = twoCard.querySelector('.sets__price__old')
let twoCardNewPrice = twoCard.querySelector('.sets__price__new')

let countTwo = 0;
twoCardsPrice.forEach(function(value, index) {
    countTwo += +value.textContent;
    return sumTwo = countTwo
});

let procentTwo = 25 * sumTwo / 100

twoCardOldPrice.innerHTML = sumTwo
twoCardNewPrice.innerHTML = sumTwo - procentTwo

let threeCard = document.querySelector('.sets__sliede__box-three')
let threeCardsPrice = threeCard.querySelectorAll('.product__card__price')
let threeCardOldPrice = threeCard.querySelector('.sets__price__old')
let threeCardNewPrice = threeCard.querySelector('.sets__price__new')

let countThree = 0;
threeCardsPrice.forEach(function(value, index) {
    countThree += +value.textContent;
    return sumThree = countThree
});

let procentThree = 25 * sumThree / 100

threeCardOldPrice.innerHTML = sumThree
threeCardNewPrice.innerHTML = sumThree - procentThree
