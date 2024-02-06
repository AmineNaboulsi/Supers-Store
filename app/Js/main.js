// Shop-Menu Button
const menushop = document.querySelector('#openshoptab');
const closeshoptab = document.querySelector('#closeshoptab');
function openshop() {
    menushop.classList.toggle('hidden');
}

function openprice() {
    const menu = document.querySelector('#openCURRENCY');
    menu.classList.toggle('hidden');
}
//Botton-CURRENCY-Changer
const menu = document.querySelector('#openCURRENCY');
const bottoncry = document.querySelectorAll('.cry-btn');
const pricechager = document.querySelector('#currency');
bottoncry.forEach(item => {
    item.addEventListener('click', () => {
        pricechager.innerHTML = item.innerHTML
        menu.classList.add('hidden');
    })
})
// Search-bar
const searchiconbtn = document.querySelector('#searchicon');
const search = document.querySelector('#search-bar')
searchiconbtn.addEventListener('click', () => {
    search.classList.toggle('hidden');
})
// Mouse-Hider
document.addEventListener('click', (e) => {
    if (e.target.id !== 'openCURRENCY' && e.target.id !== 'currency') {
        menu.classList.add('hidden');
    }
    if (e.target.id !== 'openshoptab' && e.target.id !== 'closeshoptab') {
        menushop.classList.add('hidden');
    }
    if (e.target.id !== 'searchicon' && e.target.id !== 'search-bar') {
        search.classList.add('hidden');
    }
    if (e.target.id !== 'usermenuopen' && e.target.id !== 'usermenucloser') {
        usermenucloser.classList.add('hidden');
    }
    if (e.target.id !== 'usermenuopenphone' && e.target.id !== 'usermenucloserphone') {
        usermenucloserphone.classList.add('hidden');
    }
    if (!closemenunav.contains(e.target) && e.target.id !== 'openmenunav') {
        closemenunav.classList.add('hidden');
        openmenunav.classList.remove('fa-xmark');
        openmenunav.classList.add('fa-bars');
    }
})
//Mobile-Screen-Main//
const menuopner = document.querySelector('#menuopnershop');
const menuhider = document.querySelector('#menuhidershop');
const menushoperitems = document.querySelectorAll('.menushoperitems li');
menuopner.addEventListener('click', () => {
    menuhider.classList.toggle('hidden');
})

menushoperitems.forEach(item => {
    item.addEventListener('click', () => {
        menuhider.classList.add('hidden');
    })
})

//Currency-Menu
const currencyopener = document.querySelector('#currencyopener');
const currencyhider = document.querySelector('#currencyhider');
const currencytxtchanger = document.querySelectorAll('.currencytxtchanger');
currencyopener.addEventListener('click', () => {
    currencyhider.classList.toggle('hidden');
})
currencytxtchanger.forEach(item => {
    item.addEventListener('click', () => {
        currencyopener.innerHTML = item.innerHTML
        currencyhider.classList.add('hidden');
    })
})
// Menu-Button-Close-Open

const openmenunav = document.querySelector('#openmenunav');
const closemenunav = document.querySelector('#closemenunav');

openmenunav.addEventListener('click', () => {
    closemenunav.classList.toggle('hidden');
    openmenunav.classList.toggle('fa-bars');
    openmenunav.classList.toggle('fa-xmark');
})
// User-Enter-Face//
const usermenuopen = document.querySelector('#usermenuopen');
const usermenucloser = document.querySelector('#usermenucloser');
usermenuopen.addEventListener('click', () => {
    usermenucloser.classList.toggle('hidden');
})
// User-Enter-Face-Phone//
const usermenuopenphone = document.querySelector('#usermenuopenphone'); 
const usermenucloserphone = document.querySelector('#usermenucloserphone');

usermenuopenphone.addEventListener('click', () => {
    usermenucloserphone.classList.toggle('hidden');
})

