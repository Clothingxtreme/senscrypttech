addEventListener('DOMContentLoaded', () => {
    let INITIAL_VALUE = 245600;
    let lang = 'ru';
    let i18nData = {};
    const currentImage = document.querySelector('.current-lang img');
    const currentName = document.querySelector('.current-lang p');
    const langButtons = document.querySelectorAll('.selecting-lang');
    const moneyValue = document.querySelector('.money');
    const body = document.querySelector('body');

    const formatNumber = (number) => number.match(/.{1,3}/g).join(' ');

    setInterval(() => {
        const currentMoneyValue = INITIAL_VALUE -= 100;
        if (moneyValue && currentMoneyValue && currentMoneyValue >= 0) {
            moneyValue.innerHTML = `$${formatNumber(currentMoneyValue.toString())} `;
        } else {
            moneyValue.innerHTML = INITIAL_VALUE.toString();
        }
    }, 3000)

    const translate = () => {
        const elems = body.querySelectorAll('[data-translate]')
        if (elems && elems.length) {
            elems.forEach(elem => {
                const key = elem.getAttribute('data-translate');
                elem.innerHTML = i18nData[key] || '*----NEED TO BE TRANSLATED----*   key:  ' + key;
            })
        }

    }

    const fetchData = () => {
        fetch(`assets/translate/${lang || 'en'}.json`).then(res => res.json())
            .then(json => {
                i18nData = json;
                translate();
            })
    }

    langButtons.forEach(button => {
        button.addEventListener('click', () => {
            lang = button.dataset.lang
            if (!button) return
            currentName.textContent = button.querySelector('p').textContent;
            currentImage.src = button.querySelector('img').src;
            fetchData();
        })
    })

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        if (!anchor) return;
        if (anchor.id === 'additional') {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        }
    });
    fetchData();
});
