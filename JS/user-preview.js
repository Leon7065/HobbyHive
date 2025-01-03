const show = document.querySelectorAll(".card"),
preview = document.querySelector(".preview"),
overlay = document.getElementById('overlay'),
commentLikeBtn = document.querySelector(".comment-like"),
likeIcon = document.getElementById('like'),
likeBtn = document.querySelector(".like-button"),
likeText = document.querySelector('.like-text');

const deleteCommentBtn = document.getElementById('delete-comment-btn');
 
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

const deleteCommentDiv = document.getElementById('delete-comment-ellipsis');

deleteCommentDiv.addEventListener('click', () => {
    if (deleteCommentBtn.style.display === "none") {

        deleteCommentBtn.style.display="block";

    } else {
        deleteCommentBtn.style.display="none";
    }
});

const deleteCommentConfirm = document.getElementById('delete-comment-confirm'),
deleteCommentOverlay = document.getElementById ('delete-comment-overlay'),
noC = document.getElementById('no'),
deleteC = document.getElementById('delete');

deleteCommentBtn.addEventListener('click',() =>{
    deleteCommentConfirm.style.display = "flex";
    deleteCommentOverlay.style.display="block";
});

function hideC(){
    deleteCommentConfirm.style.display = "none";
    deleteCommentOverlay.style.display="none";
}

deleteCommentOverlay.addEventListener('click',hideC);
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

postBtn.addEventListener("click", (event) => {
    event.preventDefault(); 
        
    let isValid = true;

    if (!description.value.trim()) {
        alert("Please write a description.");
        isValid = false;
    }else if(hobbies.selectedOptions.length === 0){
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

// /* =============== follow profile ============================= */

const followBtn=document.getElementById('follow-btn');

followBtn.addEventListener('click',()=>{
    if(followBtn.textContent==='Follow'){
        followBtn.textContent='Following';
        followBtn.style.backgroundColor='rgb(20, 20, 20)';
        followBtn.style.color='#ffda44';
    }else{
        followBtn.textContent='Follow';
        followBtn.style.backgroundColor='#FFDA44';
        followBtn.style.color='black';
    }
});


