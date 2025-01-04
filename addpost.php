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
</body>
</html>
