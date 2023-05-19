document.addEventListener("DOMContentLoaded", function() {

    const taskForm = document.forms.task;
    const commentBlock = document.querySelector('.comments');



    // Star rating

    const stars = document.querySelectorAll('.ratings__label');
    const starsInput = taskForm.nameRating;
    const ratingValueText = document.querySelector('.rating-text');



    stars.forEach(function(star, index1){
        star.addEventListener("click", () => {
            stars.forEach(function(star, index2){
                index1 <= index2 ? star.classList.add("active") : star.classList.remove('active');

            })
        ratingValueText.innerHTML = starsInput[index1].value + " / 5";
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

        if(files.length > 4){
            alert("Максимум 4 файли");
            files.splice(4);
            showImages();
            return;
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

    // Form  submit

    taskForm.addEventListener("submit", formSend);

    async function formSend(e) {
        e.preventDefault();

        let formData = new FormData(taskForm);

        for(let i = 0; i < files.length; i++){
            formData.append('photo'+i, files[i]);
        }



        let getData = await fetch('https://httpbin.org/post', {
            method: "POST",
            body: formData,
        })
        .then(res => res.json())
        .then(data => {

            commentBlock.insertAdjacentHTML('beforeend', `
            <div class="comment">
            <div class="comment__head">
                <p class="comment__name">${data.form.name} ${data.form.surname}</p>
                <ul class="comment__stars list">
                </ul>
            </div>
            <p class="comment__text">${data.form.comment}</p>
            <div class="comment__images">
            </div>
        </div>
        `);

        const commentImagesBlock = document.querySelectorAll('.comment__images');
        let lastCommentImagesBlock = commentImagesBlock[commentImagesBlock.length - 1];

        let photo = '';
        for (let i = 0; i < Object.keys(data.files).length; i++) {
            let photoUrl = Object.entries(data.files)[i][1];
            photo += `
            <img class="comment__image" src="${photoUrl}" alt="comment photo">
            `;
        }

        lastCommentImagesBlock.insertAdjacentHTML('beforeend', photo);


        const starsBlock = document.querySelectorAll('.comment__stars');
        let lastStarsBlock = starsBlock[starsBlock.length - 1];

        let starsHtml = '';
        let numberOfStars = Number(data.form.nameRating);
        let i = 0;
        while(i < numberOfStars){
            starsHtml += `
            <li class="comment__star"> &#9733</li>
                `
            i++;
        };

        lastStarsBlock.insertAdjacentHTML('beforeend', starsHtml);

        taskForm.reset();
        stars[0].click();
        files = [];
        showImages();
        })
        .catch(error => {
            alert("Error ", error);
        });



    }


    })
