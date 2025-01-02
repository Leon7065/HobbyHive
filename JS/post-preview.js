const show = document.querySelector(".show"),
preview = document.querySelector(".preview"),
overlay = document.getElementById('overlay'),
commentLikeBtn = document.querySelector(".comment-like"),
likeIcon = document.getElementById('like'),
likeBtn = document.querySelector(".like-button"),
likeText = document.querySelector('.like-text');

const deleteCommentBtn = document.getElementById('delete-comment-btn');
const deletePostBtn = document.getElementById('delete-post-btn');

show.addEventListener('click',function(){
    preview.style.display="flex";
    overlay.style.display="block";
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
