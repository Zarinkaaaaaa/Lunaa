//слайдер
let currentSlide = 0;
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

function changeSlide(direction) {
    const slides = document.querySelectorAll('.slide');
    slides[currentSlide].classList.remove('active');

    // Обновляем индекс текущего слайда
    currentSlide = (currentSlide + direction + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');


    // Сдвиг слайдов
    const offset = -currentSlide * 100;
    document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
}

// Автоматическая смена слайдов каждые 5 секунд
// setInterval(() => {
//     changeSlide(1);
// }, 20000);


//аккордеон
document.querySelectorAll('.accordion-header').forEach(header => {
    header.addEventListener('click', () => {
        const content = header.nextElementSibling;
        const button = header.querySelector('.toggle-button');

        if (content.style.display === "block") {
            content.style.display = "none";
            button.textContent = ">"; // Указываем стрелку вправо
        } else {
            content.style.display = "block";
            button.textContent = "⩒"; // Указываем стрелку вниз
        }
    });
});


//модальное окно
const modal = document.getElementById("myModal");
const btn = document.getElementById("openModal");
const span = document.getElementsByClassName("close")[0];
const loginModal = document.getElementById("loginModal");
const registerModal = document.getElementById("registerModal");
const toRegister = document.getElementById("toRegister");
const toLogin = document.getElementById("toLogin");
// Открытие модального окна при нажатии на кнопку
btn.onclick = function () {
    modal.style.display = "block";
}

// Закрытие модального окна при нажатии на крестик
span.onclick = function () {
    modal.style.display = "none";
}

// Закрытие модального окна при клике вне его
window.onclick = function (event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}
// Переключение на регистрацию
toRegister.onclick = function (e) {
    e.preventDefault();
    loginModal.style.display = "none";
    registerModal.style.display = "block";
}

// Переключение на вход
toLogin.onclick = function (e) {
    e.preventDefault();
    registerModal.style.display = "none";
    loginModal.style.display = "block";
}
// Обработка отправки формы
document.getElementById("loginForm").onsubmit = function (event) {
    event.preventDefault(); // предотвращаем перезагрузку страницы
    // Здесь можно добавить логику для обработки регистрации
    alert("Форма отправлена!");
    modal.style.display = "none"; // Закрываем модальное окно
}


//номер телефона
function addPrefix() {
    const input = document.getElementById('phone');
    if (input.value === '') {
        input.value = '+7 ';
    }
}
function addPrefiy() {
    const input = document.getElementById('phonee');
    if (input.value === '') {
        input.value = '+7 ';
    }
}


//поиск
// const searchIcon = document.getElementById('searchIcon');
// const searchBox = document.getElementById('searchBox');

// searchIcon.addEventListener('click', () => {
//     searchBox.style.display = searchBox.style.display === 'none' ? 'block' : 'none';
//     searchBox.focus();
// });



//бургер-меню
const menu = document.querySelector(".menu");
const menuItems = document.querySelectorAll(".menuItem");
const burger = document.querySelector(".burger");
const closeIcon = document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

function toggleMenu() {
    if (menu.classList.contains("showMenu")) {
        menu.classList.remove("showMenu");
        closeIcon.style.display = "none";
        menuIcon.style.display = "block";
    } else {
        menu.classList.add("showMenu");
        closeIcon.style.display = "block";
        menuIcon.style.display = "none";
    }
}

burger.addEventListener("click", toggleMenu);

menuItems.forEach(
    function (menuItem) {
        menuItem.addEventListener("click", toggleMenu);
    }
)