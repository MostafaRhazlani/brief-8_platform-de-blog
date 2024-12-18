const showFormArticle = document.querySelector('.showFormArticle');
const formArticle = document.querySelector('.formArticle');

const showFormEditArticle = document.querySelector('#showFormEditArticle');
const formEditArticle = document.querySelector('#formEditArticle');

const showInputImage = document.querySelectorAll('.showInputImage');
const inputImage = document.querySelectorAll('.inputImage');

const showInputTags = document.querySelectorAll('.showInputTags');
const inputTags = document.querySelectorAll('.inputTags');

const showPopupUser = document.querySelector('.showPopupUser');
const popupUser = document.querySelector('.popupUser');

const showActions = document.querySelector('#showActions');
const popupActions = document.querySelector('#popupActions');

const closeFrom = document.querySelectorAll('.colseForm');

// show form article
showFormArticle.addEventListener('click', () => {
    formArticle.classList.remove('hidden');
});

// show form edit article
showFormEditArticle.addEventListener('click', () => {
    formEditArticle.classList.remove('hidden');
    popupActions.classList.add('hidden')
});

// show input upload image in form article
showInputImage.forEach((show, i) => {
    show.addEventListener('click', () => {
        
        inputImage[i].classList.toggle('hidden');
    })
})

// show input tags in form article
showInputTags.forEach((show, i) => {
    show.addEventListener('click', () => {
        inputTags[i].classList.toggle('hidden');
    })
})

// show pop up in image user
showPopupUser.addEventListener('click', () => {
    popupUser.classList.toggle('hidden')
})

// show form actionss
showActions.addEventListener('click', () => {
    popupActions.classList.toggle('hidden')
})

// close article
closeFrom.forEach(close => {
    close.addEventListener('click', () => {
        formArticle.classList.add('hidden');
        formEditArticle.classList.add('hidden');
    })
})