const scroll = {
    init: function () {

        const check = (value) => {
            return value ? value : [];
        };

        const q = (selector) => {
            return document.querySelector(check(selector));
        };

        const hrefArray = document.querySelectorAll('.in ul li a');
        const elArray = [
            q('#about'),
            q('#features'),
            q('#gallery'),
            q('#location'),
            q('#docs'),
            q('#specs'),
            q('#office'),
        ];


        const offset = (el) => {
            const rect = el.getBoundingClientRect();
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            return rect.top + scrollTop;
        };

        const getScroll = () => {
            for (let i = 0; i < elArray.length; i++) {
                if (elArray[i])
                hrefArray[i].addEventListener('click', e => {
                    e.preventDefault();
                    window.scroll({
                        top: offset(elArray[i]),
                        behavior: 'smooth'
                    })
                })
            }
        };
        getScroll();
    }
};

scroll.init();