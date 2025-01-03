const show = document.querySelectorAll(".card"),
preview = document.querySelector(".preview"),
overlay = document.getElementById('overlay'),
commentLikeBtn = document.querySelector(".comment-like"),
likeIcon = document.getElementById('like'),
likeBtn = document.querySelector(".like-button"),
likeText = document.querySelector('.like-text');

const deleteCommentBtn = document.getElementById('delete-comment-btn');
const deletePostBtn = document.getElementById('delete-post-btn');
 
show.forEach((shows) => {
    shows.addEventListener('click',function(){
        preview.style.display="flex";
        overlay.style.display="block";
    });
});

overlay.addEventListener('click',function(){
    preview.style.display="none";
    overlay.style.display="none";
    deleteCommentBtn.style.display="none";
    deletePostBtn.style.display="none";
});

commentLikeBtn.addEventListener('click',function(){
    commentLikeBtn.classList.toggle("comment-like-active");
    commentLikeBtn.classList.toggle("fa-regular");
    commentLikeBtn.classList.toggle("fa-solid");
});

likeBtn.addEventListener('click',function(){
    likeIcon.classList.toggle("comment-like-active");
    likeIcon.classList.toggle("fa-regular");
    likeIcon.classList.toggle("fa-solid");
    likeIcon.style.padding="0px 5px 0px 0px";
    if(likeText.style.display === 'none'){
        likeText.style.display = 'inline';
    }else{
        likeText.style.display='none';
    }
});



const deletePostDiv = document.getElementById('delete-post-ellipsis');


deletePostDiv.addEventListener('click', () => {
    if (deletePostBtn.style.display === "none") {

        deletePostBtn.style.display="block";
    } else {
        deletePostBtn.style.display="none";
    }
});

const deletePostOverlay = document.getElementById('delete-post-overlay'),
deletePostConfirm = document.getElementById('delete-post-confirm'),
no = document.querySelector(".no"),
yes = document.querySelector(".delete");


deletePostBtn.addEventListener('click',() =>{
    deletePostConfirm.style.display = "flex";
    deletePostOverlay.style.display="block";
});

function hide(){
    deletePostConfirm.style.display = "none";
    deletePostOverlay.style.display="none";
}

deletePostOverlay.addEventListener('click',hide);
no.addEventListener('click',hide);
yes.addEventListener('click',hide);

// 

const deleteCommentDiv = document.getElementById('delete-comment-ellipsis');

deleteCommentDiv.addEventListener('click', () => {
    if (deleteCommentBtn.style.display === "none") {

        deleteCommentBtn.style.display="block";

    } else {
        deleteCommentBtn.style.display="none";
    }
});

const deleteCommentConfirm = document.getElementById('delete-comment-confirm'),
noC = document.getElementById('no'),
deleteC = document.getElementById('delete');

deleteCommentBtn.addEventListener('click',() =>{
    deleteCommentConfirm.style.display = "flex";
    deletePostOverlay.style.display="block";
});

function hideC(){
    deleteCommentConfirm.style.display = "none";
    deletePostOverlay.style.display="none";
}

deletePostOverlay.addEventListener('click',hideC);
noC.addEventListener('click',hideC);
deleteC.addEventListener('click',hideC);


// ================================================ Add post

const showCreatePostBtn = document.querySelector(".show-create-post-btn");
const createPostCard = document.querySelector('.create-post-card');
const postBtn = document.getElementById('post-btn');
const imageUpload = document.getElementById('image-upload');
const description = document.getElementById('create-post-t');
const hobbies = document.getElementById('create-hobbies');


function showCreatePostCard() {
    overlay.style.display = 'block';
    createPostCard.style.display = 'block';
}
 

function hideCreatePostCard() {
    overlay.style.display = 'none';
    createPostCard.style.display = 'none';
}


function validateForm() {
    const descriptionValue = description.value.trim();
    const hobbiesSelected = Array.from(hobbies.selectedOptions).length > 0;

    if (!descriptionValue) {
        alert('Please enter a description.');
        return false;
    }

    if (!hobbiesSelected) {
        alert('Please select at least one hobby.');
        return false;
    }

    return true;
}

postBtn.addEventListener("click", (event) => {
    event.preventDefault(); 
    
    const descriptionInput = document.querySelector("#create-post-t");
    const hobbiesSelect = document.querySelector("#create-hobbies");    
    let isValid = true;

    if (!descriptionInput.value.trim()) {
        alert("Please write a description.");
        isValid = false;
    }else if(hobbiesSelect.selectedOptions.length === 0){
        alert("Please select at least one hobby.");
        isValid = false;
    }


    if (isValid) {
        const form = document.querySelector(".create-post-card form");
        form.submit(); 
        hideCreatePostCard();
    }
});

showCreatePostBtn.addEventListener('click', showCreatePostCard);

overlay.addEventListener('click', hideCreatePostCard);

// /* =============== edit profile ============================= */

const editProfileBtn = document.getElementById('edit-btn');
const editDiv = document.querySelector('.edit-div');
const saveBtn = document.getElementById('save-btn');
const EPimageUpload = document.getElementById('pfp-upload');
const EPdescription = document.getElementById('epd');
const EPhobbies = document.getElementById('eph');



function showeditDiv() {
    overlay.style.display = 'block';
    editDiv.style.display = 'block';
}
 

function hideeditDiv() {
    overlay.style.display = 'none';
    editDiv.style.display = 'none';
}


function validateForm() {
    const descriptionValue = EPdescription.value.trim();
    const hobbiesSelected = Array.from(EPhobbies.selectedOptions).length > 0;

    if (!descriptionValue) {
        alert('Please write a new bio.');
        return false;
    }

    if (!hobbiesSelected) {
        alert('Please select at least one hobby.');
        return false;
    }

    return true;
}

saveBtn.addEventListener("click", (event) => {
    event.preventDefault(); 
    
    const descriptionInput = document.querySelector("#epd");
    const hobbiesSelect = document.querySelector("#eph");
    let isValid = true;

    if (!descriptionInput.value.trim()) {
        alert("Please write a new bio.");
        isValid = false;
    }else if(hobbiesSelect.selectedOptions.length === 0){
        alert("Please select at least one hobby.");
        isValid = false;
    }


    if (isValid) {
        const form = document.querySelector(".edit-div form");
        form.submit(); 
        hideeditDiv();
    }
});

editProfileBtn.addEventListener('click', showeditDiv);

overlay.addEventListener('click', hideeditDiv);

