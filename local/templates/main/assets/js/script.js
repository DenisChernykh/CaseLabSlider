const blog = new Swiper('.blog__slider', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        nextEl: '.swiper-button-right',
        prevEl: '.swiper-button-left',
    },
    breakpoints: {


        // when window width is >= 768px
        768: {
            slidesPerView: 2,

        }
    }
});

const vote = new Swiper('.vote__slider', {
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },
    parallax: true,
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        nextEl: '.swiper-button-right',
        prevEl: '.swiper-button-left',
    },
});


if (document.querySelector(".icon-menu")) document.addEventListener("click", (function (e) {
    if (e.target.closest(".icon-menu")) {

        document.documentElement.classList.toggle("menu-open");
    }
}));

const modalController = ({modal, btnOpen, btnClose, time = 300}) => {
    const buttonElems = document.querySelectorAll(btnOpen);
    const modalElem = document.querySelector(modal);

    modalElem.style.cssText = `
    display: flex;
    visibility: hidden;
    opacity: 0;
    transition: opacity ${time}ms ease-in-out;
  `;
    const form = document.querySelector('#form');
    const closeModal = event => {
        const target = event.target;

        if (
            target === modalElem ||
            (btnClose && target.closest(btnClose)) ||
            event.code === 'Escape'
        ) {
            form.submit();
            modalElem.style.opacity = 0;

            setTimeout(() => {
                modalElem.style.visibility = 'hidden';
            }, time);

            window.removeEventListener('keydown', closeModal);
        }
    }


// перед отправкой формы, её нужно вставить в документ


    const openModal = () => {
        modalElem.style.visibility = 'visible';
        modalElem.style.opacity = 1;
        window.addEventListener('keydown', closeModal)
    };

    buttonElems.forEach(btn => {
        btn.addEventListener('click', openModal);
    });

    modalElem.addEventListener('click', closeModal);
};

modalController({
    modal: '.modal',
    btnOpen: '.modal__button',
    btnClose: '.modal__close',
});

// let form = document.createElement('form');
// form.action = 'https://google.com/search';
// form.method = 'GET';
//
// form.innerHTML = '<input name="q" value="test">';
//
// // перед отправкой формы, её нужно вставить в документ
// document.body.append(form);
//
// form.submit();