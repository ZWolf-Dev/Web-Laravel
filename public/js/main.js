// Modal
// mở Modal form-login\register khi click vào đăng nhập hoặc đăng ký
function openModal(x) {
    closeModal();
    document.querySelector(`${x}`).classList.toggle('nonedisplay');
}

// đóng Modal form-login\register khi click vào modal__overlay
function closeModal() {
    var elementRegister = document.querySelector('.form-login');
    var elementLogin= document.querySelector('.form-register');
    elementRegister.classList.remove('nonedisplay');
    elementLogin.classList.remove('nonedisplay');
}
document.querySelector('.modal__overlay').onclick = function() {
    closeModal();
};

// Chuyển form login -> register và ngực lại
function switchForm(click, show, hiden) {
    document.querySelector(`${click}`).onclick = function () {
        document.querySelector(`${show}`).classList.remove('nonedisplay');
        document.querySelector(`${hiden}`).classList.add('nonedisplay');
    }
}

document.querySelector('.auth-form__switch-btn-login').onclick = function () {
    switchForm('.auth-form__switch-btn-login', '.form-login', '.form-register');
}

document.querySelector('.auth-form__switch-btn-register').onclick = function () {
    switchForm('.auth-form__switch-btn-register', '.form-register', '.form-login');
}

// Search
// thêm <li></li> lịch sử tìm kiếm đực lấy từ input khi click ra ngoài
var searchElement = document.querySelector('.header__search-wrap-input');
var searchListElement = document.querySelector('.header__search-history-list');
searchElement.onchange = function(e) {
   searchListElement.innerHTML += '<li class="header__search-history-item"><a>'+ e.target.value +'</a></li>';
}

// Xóa hành vi mặc định click ra ngoài input thoát focus
var ulSearchElement = document.querySelector('.header__search-history-list');
ulSearchElement.onmousedown = function(e) {
    e.preventDefault();
}

// Lấy text của lịch sử tìm kiếm ul li gán cho input  
var inputSearchElement = document.querySelector('.header__search-wrap-input');
ulSearchElement.onclick = function(e) {
    inputSearchElement.value = e.target.innerText;
}

// Label giá thấp -> cao, cao -> thấp
var labelPriceSort = document.querySelector('label.select-input__label');
var ulPriceSort = document.querySelector('.select-input__list');
ulPriceSort.onclick = function(e) {
    labelPriceSort.innerText = e.target.innerText;
}

// Click vào sáng lên
// function setActiveClass(elementAddClass, classAdd) {
//     var elementList = document.querySelectorAll(`${elementAddClass}`);
//     var lastSelectedElement = null;
//     for(var i = 0; i < elementList.length; ++i) {
//         elementList[i].onclick = function(e) {
//             if(lastSelectedElement !== null) {
//                 lastSelectedElement.classList.remove(`${classAdd}`);
//             }
//             e.target.closest(`${elementAddClass}`).classList.add(`${classAdd}`);
//             lastSelectedElement = e.target.closest(`${elementAddClass}`);
//         }
//     }
// }
function setActiveClass(classAdd, active, line) {
    if(line !== undefined){
    document.querySelector(`${line}`).style.left = document.querySelector('.'+`${active}`).offsetLeft + 'px';
    document.querySelector(`${line}`).style.width = document.querySelector('.'+`${active}`).offsetWidth + 'px';
    }
    document.querySelectorAll(`${classAdd}`).forEach((tab) => {
        tab.onclick = function () {
            document.querySelector(`${classAdd}`+ '.' + `${active}`).classList.remove(`${active}`)
            if(line !== undefined){
            document.querySelector(`${line}`).style.left = this.offsetLeft + 'px';
            document.querySelector(`${line}`).style.width = this.offsetWidth + 'px';
            }
            this.classList.add(`${active}`);
        }
    });
}

// Category left
setActiveClass('.category-item', 'category-item--active');

// Search select
setActiveClass('.header__search-option-item', 'header__search-option-item--active');

// Home filter
setActiveClass('.home-filter__btn', 'btn--primary');

// Pagination
setActiveClass('.pagination-number', 'pagination-item--active');

// header mobile sort-bar
setActiveClass('.header__sort-item', 'header__sort-item--active', '.header__sort-bar .line');

// Product favorites
var products = document.querySelectorAll('.home-product-item');
products.forEach(function(e) {
    e.addEventListener('click', function() {
        var icon = e.querySelector('.home-product-item__favourite-icon');
        icon.classList.toggle('hidden');
    });
});

// Heart
function regular(e) {
    e.classList.remove("home-product-item__like-icon-fill");
    e.classList.add("home-product-item__like-icon-empty");
    e.nextElementSibling.classList.remove("home-product-item__like-icon-empty");
    e.nextElementSibling.classList.add("home-product-item__like-icon-fill");
}
function solid(e) {
    e.previousElementSibling.classList.remove("home-product-item__like-icon-empty");
    e.previousElementSibling.classList.add("home-product-item__like-icon-fill");
    e.classList.remove("home-product-item__like-icon-fill");
    e.classList.add("home-product-item__like-icon-empty");
}