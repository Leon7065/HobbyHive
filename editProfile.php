<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit profile</title>
    <link rel="stylesheet" href="CSS/editProfile.css">
</head>
<body>
    

    <div id="overlay"></div>
    <button id="edit-btn">Edit Profile</button>

    <div class="edit-div">
    <h2>Edit your profile!</h2>
        <form>
            <label for="image-upload">Upload an Image:</label>
            <input type="file" id="image-upload" accept="image/*">

            <label for="epd">Bio:</label>
            <textarea id="epd" placeholder="Write something about yourself..."></textarea>

            <label for="eph">Select your favorite Hobbies (hold ctrl for multiple):</label>
            <select id="eph" class="multi-select" multiple>
                <option value="painting">Painting</option>
                <option value="cooking">Cooking</option>
                <option value="gaming">Gaming</option>
                <option value="music">Music</option>
                <option value="sports">Sports</option>
                <option value="travel">Travel</option>
                <option value="photography">Photography</option>
                <option value="writing">Writing</option>
            </select>

            <button id="save-btn" type="submit">Save</button>
        </form>
    </div>




    <script src="JS/editProfile.js" ></script>
</body>
</html>