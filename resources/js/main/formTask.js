document.addEventListener("DOMContentLoaded", function() {

    const taskForm = document.forms.task;

    // Star rating

    const stars = document.querySelectorAll('.ratings__label');
    const starsInput = taskForm.nameRating;
    const ratingValue = document.querySelector('.rating-text');



    stars.forEach(function(star, index1){
        star.addEventListener("click", () => {
            stars.forEach(function(star, index2){
                index1 <= index2 ? star.classList.add("active") : star.classList.remove('active');
            })
        ratingValue.innerHTML = starsInput[index1].value + " / 5";
        })
    })

    stars[0].click();




    // Images Upload


    let files = [];
    const fileLoadInput = document.querySelector('.file__input');
    const previewBlock = document.querySelector('.file__preview');

    fileLoadInput.addEventListener("change", () => {
        let file = fileLoadInput.files;

        for(let i = 0; i < file.length; i++){
            files.push(file[i]);
        }

        showImages();
    })

    function showImages() {
        let image = '';
        files.forEach((e, i) => {
            image += `<div class="preview__item">
                    <img class="preview__photo" src="${URL.createObjectURL(e)}" alt="preview photo">
                    <span class="preview__remove" data-photo="${i}">&times;</span>
             </div>`
        });

       previewBlock.innerHTML = image;

       const removePhotoBtns = document.querySelectorAll('.preview__remove');

       removePhotoBtns.forEach(function(e){
           e.addEventListener("click", function(){
               let removeBtnId = e.getAttribute('data-photo');
               delImage(removeBtnId);
           })
       })
    }

    function delImage(e){
        files.splice(e, 1);
        showImages();
    }

    })
