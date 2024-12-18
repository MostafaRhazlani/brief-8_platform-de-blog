const showFormArticle = document.querySelector('.showFormArticle');
const formArticle = document.querySelector('.formArticle');

const showFormEditArticle = document.querySelectorAll('.showFormEditArticle');
const formEditArticle = document.querySelector('.formEditArticle');

const showInputImage = document.querySelectorAll('.showInputImage');
const inputImage = document.querySelectorAll('.inputImage');

const showInputTags = document.querySelectorAll('.showInputTags');
const inputTags = document.querySelectorAll('.inputTags');

const showPopupUser = document.querySelector('.showPopupUser');
const popupUser = document.querySelector('.popupUser');

const showActions = document.querySelectorAll('.showActions');
const popupActions = document.querySelectorAll('.popupActions');

const closeFrom = document.querySelectorAll('.colseForm');

// show form article
showFormArticle.addEventListener('click', () => {
    formArticle.classList.remove('hidden');
});

// show form edit article
showFormEditArticle.forEach(show => {
    show.addEventListener('click', () => {
        formEditArticle.classList.remove('hidden');
        popupActions.forEach(popup => {
            popup.classList.add('hidden')
        })
    });
})

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

// show form actions
showActions.forEach(show => {
    show.addEventListener('click', () => {
        let idArticle = show.dataset.id;
        
        popupActions.forEach(popup => {
            let idPopUp = popup.dataset.id;

            if (idPopUp === idArticle) {
                popup.classList.toggle('hidden')
            } else {
                popup.classList.add('hidden')
            }
        })
    })
})

// close article
closeFrom.forEach(close => {
    close.addEventListener('click', () => {
        formArticle.classList.add('hidden');
        formEditArticle.classList.add('hidden');
    })
})