(function ($) {
    "use strict";
    //search active



    let searchselect = document.querySelector('.menu_options');
    let searchfull = document.querySelector('.searcharea');
    searchselect.addEventListener('click', () => {
        searchfull.classList.toggle('searchShown');
    })

    let selectClose = document.querySelector('.searchClose');
    let searcharea = document.querySelector('.searcharea');
    selectClose.addEventListener('click', () => {
        searcharea.classList.remove('searchShown');
    });

    //left to right menu

    $('.menu_two').on('click', function () {
        $('.left_to_menu').addClass('shoeleft');
    });

    $('.lefttoMenu').on('click', function () {
        $('.left_to_menu').removeClass('shoeleft');
    });

})(jQuery);