const showCreatePostBtn = document.getElementById('show-create-post-btn');
const overlay = document.getElementById('overlay');
const createPostCard = document.querySelector('.create-post-card');
const postBtn = document.getElementById('post-btn');
const imageUpload = document.getElementById('image-upload');
const description = document.getElementById('description');
const hobbies = document.getElementById('hobbies');


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
    
    const descriptionInput = document.querySelector("#description");
    const hobbiesSelect = document.querySelector("#hobbies");
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
        form.submit(); // Submit the form programmatically
        hideCreatePostCard();
    }
});

showCreatePostBtn.addEventListener('click', showCreatePostCard);

overlay.addEventListener('click', hideCreatePostCard);