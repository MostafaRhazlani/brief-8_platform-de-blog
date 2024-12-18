const showFormArticle = document.querySelector('.showFormArticle');
const formArticle = document.querySelector('.formArticle');

const showInputImage = document.querySelector('.showInputImage');
const showInputTags = document.querySelector('.showInputTags');
const inputImage = document.querySelector('.inputImage');
const inputTags = document.querySelector('.inputTags');

const close = document.querySelector('#close');

showFormArticle.addEventListener('click', () => {
    formArticle.classList.remove('hidden');
});

close.addEventListener('click', () => {
    formArticle.classList.add('hidden')
})

showInputImage.addEventListener('click', () => {
    inputImage.classList.toggle('hidden')
})

showInputTags.addEventListener('click', () => {
    inputTags.classList.toggle('hidden');
})