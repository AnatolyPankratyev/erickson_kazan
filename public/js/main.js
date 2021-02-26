window.addEventListener('DOMContentLoaded', function () {

    'use strict'

    // setTimeout("$('#modal-open-start').modal('show')", 2000);

    // slider

    let slideIndex = 1,
        slides = document.querySelectorAll('.feedback-slider'),
        prev = document.querySelector('.feedback-prev'),
        next = document.querySelector('.feedback-next'),
        dotsWrap = document.querySelector('.slider-dots'),
        dots = document.querySelectorAll('.dot');

    showSlides(slideIndex);

    function showSlides(n) {

        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }

        slides.forEach((item) => item.style.display = 'none');

        dots.forEach((item) => item.classList.remove('dot-active'));

        slides[slideIndex - 1].style.display = 'flex';
        dots[slideIndex - 1].classList.add('dot-active');
    }

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    prev.addEventListener('click', function () {
        plusSlides(-1);
    });

    next.addEventListener('click', function () {
        plusSlides(1);
    });

    dotsWrap.addEventListener('click', function (event) {
        let target = event.target;
        for (let i = 0; i < dots.length + 1; i++) {
            if (target.classList.contains('dot') && target === dots[i-1]) {
                currentSlide(i);
            }
        }
    });

});





