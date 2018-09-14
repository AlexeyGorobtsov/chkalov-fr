const check = (value) => {
    return value ? value : [];
};

const q = (selector) => {
    return document.querySelector(check(selector));
};

const scroll = {
    init: function () {

        const hrefArray = document.querySelectorAll('.in ul li a');
        const elArray = [
            q('#about'),
            q('#features'),
            q('#gallery'),
            q('#location'),
            q('#specs'),
            q('#docs'),
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
const ajaxObj = {};
const sendDataForm = {
    init: function () {
        const name = q('input[name=name]');
        const email = q('input[name=email]');
        const text = q('textarea[name=body]');
        ajaxObj.name = name.value;
        ajaxObj.email = email.value;
        ajaxObj.message = text.value;

        const request = new XMLHttpRequest();
        const url = '/';
        request.open('POST', url);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.responseType = "";
        request.onload = function () {
            //console.log(request.response)
        };

        const rawBody = {
            'name' : name.value,
            'email' : email.value,
            'message' : text.value,
        };

        request.send(JSON.stringify(rawBody));

        if (request.responseText == 'ok') {
            alert("Попробуйте отправить заявку еще раз...");
        } else {
            alert("Наш менеджер свяжется с вами в ближайшее время!");
            q('.i-close').click();
        }

    },

    send: function () {
        const checkbox = q('.wrap-check input[type=checkbox]');
        const send = q('.input button');
        checkbox.addEventListener('click', () => {
            if (send.disabled === true) {
                send.disabled = false;
                send.style.cursor = 'pointer';
            } else {
                send.disabled = true;
                send.style.cursor = 'unset';
            }
        });

        send.addEventListener('click', (e) => {
            e.stopPropagation();
            e.preventDefault();
            this.init();
            Comagic.addOfflineRequest(ajaxObj);
            //console.log(ajaxObj);
            return false;
        })

    }
};

sendDataForm.send();


const modalTable = {
    init: function () {
        const modal = q('.main-modal');
        const href = q('.choice-href');
        const closeModal = q('.modal-container .i-close');
        const learnMore = document.querySelectorAll('.modal-container table tbody tr td:last-child ');

        href.addEventListener('click', e => {
            e.preventDefault();
            modal.style.display = 'block';
            q('body').classList.add('fixed');
        });

        closeModal.addEventListener('click', e => {
            e.preventDefault();
            modal.style.display = 'none';
            q('body').classList.remove('fixed');
        });

        window.addEventListener('click', e => {
            if (e.target === modal) {
                modal.style.display = 'none';
                q('body').classList.remove('fixed');
            }
        });

        learnMore.forEach(item => {
            item.addEventListener('click', () => {
                document.querySelector('.b-popup').classList = 'b-popup prepare active';
            })
        })

    }
};

modalTable.init();


const slideText = {
    init: function (next, prev, slides) {

        let slideIndex = 1;
        // const next = q('.next');
        // const prev = q('.prev');


        const showSlides = n => {
            //const slides = document.querySelectorAll('.mySlides');
            if (n > slides.length) { slideIndex = 1}
            if (n < 1) { slideIndex = slides.length }
            slides.forEach(item => {
                item.style.display = 'none';
            });

            slides[slideIndex - 1].style.display = 'block';
        };

        const plusSlides = n => showSlides(slideIndex += n);

        showSlides(slideIndex);

        prev.addEventListener('click', () => plusSlides(-1));
        next.addEventListener('click', () => plusSlides(1));
    }
};

slideText.init(q('.next'), q('.prev'), document.querySelectorAll('.mySlides'));
slideText.init(q('.next-top'), q('.prev-top'), document.querySelectorAll('.mySlides-top'));