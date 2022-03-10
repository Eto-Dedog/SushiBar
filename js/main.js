let headerAuth = document.querySelector('.header__auth')
let headerNav = document.querySelector('.header__nav')
let headerNavLinks = document.querySelectorAll('.header__nav__link')

function hide () {
    if (pageYOffset > 89) {
        headerNav.style.marginTop = '-120px'
        headerNav.style.background = '#fbf4eb'
        for (let headerNavLink of headerNavLinks) {
            headerNavLink.style.color = "#000000"
            headerNavLink.transition = '0.8s'
            headerNavLink.style.padding = "5px"
            headerNavLink.style.margin = "15px"
            headerNav.style.marginLeft = "-750px"
            headerNav.style.paddingLeft = "1000px"
            headerNav.style.paddingRight = "1000px"
        }
    } else if (pageYOffset < 90) {
        headerNav.style.marginTop = '0px'
        headerNav.style.background = 'transparent'
        headerAuth.style.transition = '0.5s'
        headerNav.style.transition = '0.5s'
        for (let headerNavLink of headerNavLinks) {
            headerNavLink.style.color = "#ffffff"
            headerNavLink.transition = '0.8s'
            headerNav.style.marginLeft = "250px"
            headerNav.style.paddingLeft = "0px"
            headerNav.style.paddingRight = "0px"
        }
    }
}

setInterval(hide)