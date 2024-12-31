<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/addpost.css">
    <title>Create Post</title>
</head>
<body>

<button id="show-create-post-btn">Show</button>

<!-- Background Overlay -->
<div id="overlay"></div>

    <div class="create-post-card">
        <h2>Create a Post</h2>
        <form>
            <label for="image-upload">Upload an Image:</label>
            <input type="file" id="image-upload" accept="image/*">

            <label for="description">Description:</label>
            <textarea id="description" placeholder="Write something about your post..."></textarea>

            <label for="hobbies">Select Hobbies(hold ctrl for multiple):</label>
            <select id="hobbies" class="multi-select" multiple>
                <option value="painting">Painting</option>
                <option value="cooking">Cooking</option>
                <option value="gaming">Gaming</option>
                <option value="music">Music</option>
                <option value="sports">Sports</option>
                <option value="travel">Travel</option>
                <option value="photography">Photography</option>
                <option value="writing">Writing</option>
            </select>

            <button id="post-btn" type="submit">Post</button>
        </form>
    </div>
    <script>
// Select Elements
const showCreatePostBtn = document.getElementById('show-create-post-btn');
const overlay = document.getElementById('overlay');
const createPostCard = document.querySelector('.create-post-card');
const postBtn = document.getElementById('post-btn');
const imageUpload = document.getElementById('image-upload');
const description = document.getElementById('description');
const hobbies = document.getElementById('hobbies');

// Function to Show Create Post Card
function showCreatePostCard() {
    overlay.style.display = 'block';
    createPostCard.style.display = 'block';
}

// Function to Hide Create Post Card
function hideCreatePostCard() {
    overlay.style.display = 'none';
    createPostCard.style.display = 'none';
}

// Validate Form Fields
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

// Event Listeners
showCreatePostBtn.addEventListener('click', showCreatePostCard);

overlay.addEventListener('click', hideCreatePostCard);

postBtn.addEventListener('click', (e) => {
    e.preventDefault(); // Prevent form submission for demo
    if (validateForm()) {
        hideCreatePostCard();
    }
});


    </script>

</body>
</html>
