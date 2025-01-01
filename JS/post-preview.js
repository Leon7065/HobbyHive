const show = document.querySelector(".show"),
preview = document.querySelector(".preview"),
overlay = document.getElementById('overlay'),
commentLikeBtn = document.querySelector(".comment-like"),
likeIcon = document.getElementById('like'),
likeBtn = document.querySelector(".like-button"),
likeText = document.querySelector('.like-text');

show.addEventListener('click',function(){
    preview.style.display="flex";
    overlay.style.display="block";
});

overlay.addEventListener('click',function(){
    preview.style.display="none";
    overlay.style.display="none";
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

