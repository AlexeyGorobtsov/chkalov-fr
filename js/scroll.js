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
        request.responseType = "json";
        request.onload = function () {
            console.log(request.response)
        };
        request.send(ajaxObj);

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

        send.addEventListener('click', () => {
            this.init();
            Comagic.addOfflineRequest(ajaxObj);
            console.log(ajaxObj);
        })

    }
};

sendDataForm.send();
