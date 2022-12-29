import { isWebp, headerFixed } from './modules'
import AOS from 'aos'
/* Раскомментировать для использования */
// import { MousePRLX } from './libs/parallaxMouse'

/* Раскомментировать для использования */
// import Swiper, { Navigation, Pagination } from 'swiper'

// Проверка браузера на поддерку .webp изображений ====================================================================================================================================================
isWebp()
// ====================================================================================================================================================

// Паралакс мышей ====================================================================================================================================================
// const mousePrlx = new MousePRLX({})
// ====================================================================================================================================================

// Фиксированный header ====================================================================================================================================================
// headerFixed()
// ====================================================================================================================================================
AOS.init({ disable: 'mobile' });

let popupBg = document.querySelector('.modal__wrapper'); // Фон попап окна
let popup = document.querySelector('.modal'); // Само окно
let openPopupButtons = document.querySelectorAll('.open__modal'); // Кнопки для показа окна // Кнопка для скрытия окна
let body = document.querySelector('body');
openPopupButtons.forEach((button) => { // Перебираем все кнопки
  button.addEventListener('click', (e) => { // Для каждой вешаем обработчик событий на клик
    e.preventDefault(); // Предотвращаем дефолтное поведение браузера
    popup.classList.add('open'); // И для самого окна
    body.classList.add('lock'); // И для самого окна
  })
});
document.addEventListener('click', (e) => { // Вешаем обработчик на весь документ
  if (e.target === popupBg) { // Если цель клика - фот, то:
    popup.classList.remove('open'); // И для самого окна
    body.classList.remove('lock'); // И для самого окна
  }
});


let element = document.getElementById('topbutton');
if (element) {
  window.addEventListener('scroll', function () {
    if (window.scrollY > 500) {
      element.classList.add("active");
    } else {
      element.classList.remove("active");
    }
  });
}
