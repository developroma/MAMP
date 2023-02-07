let titleArray = Array.from(document.querySelectorAll('.diff_products__title'));
let contentArray = Array.from(document.querySelectorAll('.diff_products__shown'));


titleArray.forEach((item, index ) => {
    item.addEventListener('click', () => {
        titleArray.find(item => item.classList.remove('diff_products__title-active'));
        contentArray.find(item => item.classList.remove('diff_products__shown-active'));

        titleArray[index].classList.add('diff_products__title-active')
        contentArray[index].classList.add('diff_products__shown-active')

    })
});


jQuery(document).ready(function ( $ ) {
    $('.slider__inner').slick({
        arrows: false,
        slidesToShow: 6,
        infinite: true, 
        autoplay: true, 
        autoplaySpeed: 1500,
        slidesToScroll: 1,
        variableWidth: true, 


    });
});

jQuery(document).ready(function ( $ ) {
    $('.card__inner-slider').slick({
        arrows: false,
        slidesToShow: 1,
        dots: true,  

    });
});
let novelty = document.querySelector('.diff_products__shown-novelty');
let noveltyTitle = document.querySelectorAll('.diff_products__title');


noveltyTitle[0].addEventListener('click', () => {
    novelty.classList.add('diff_products__shown-novelty-active');
});


let topHeader = document.querySelector('.top_fixed');

window.onscroll = () => {
    if (window.scrollY >= 152) {
        topHeader.classList.add('top_fixed-active');

    } else if (window.scrollY < 20) {
        topHeader.classList.remove('top_fixed-active');
    }

}

let burger = document.querySelector('.header__link-main');
let headerF= document.querySelector('.header__shape-f');
let burgerList = document.querySelector('.burger__list');
let burgerF = document.querySelector('.burger__list-f');


burger.addEventListener('click', () =>  {
    burgerList.classList.toggle('burger__list-active');
});

headerF.addEventListener('click', () =>  {
    burgerF.classList.toggle('burger__list-active');
});