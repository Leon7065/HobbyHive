<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" >
    <link rel="stylesheet" href="CSS/explorer.css">
</head>
<body>
    
    <div class="body-content">
        <div class="left">
            <ul id="nav-bar-ul">
                <li class="nav-bar-options"><a href=""><i class="fa-regular fa-compass"></i> Explorer</a></li>
                <li class="nav-bar-options"><a href=""><i class="fa-solid fa-star"></i> H-Explorer</a></li>
                <li class="nav-bar-options"><a href=""><i class="fa-regular fa-message"></i> Messages</a></li>
                <li class="nav-bar-options"><a href=""><i class="fa-regular fa-envelope"></i> Notifications</a></li>
                <li class="nav-bar-options"><a href=""><i class="fa-solid fa-gear"></i> Settings</a></li>
                <li class="nav-bar-options"><a href=""><i class="fa-solid fa-plus"></i> Add post</a></li>
            </ul>
            <p id="log-out"><a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</a></p>
        </div>

        <hr id="left-right-hr">

        <div class="right">
            <div class="title">
                <h1 id="welcome">Welcome to</h1>
                <img id="logo" src="images/logo-name-right-croped.jpg" alt="">
            </div>
            <hr id="explorer-hr">

            <div class="post">
                <!-- Post Header -->
                <div class="post-header">
                    <img class="post-profile-pic" src="images/wëlltër.jpg" alt="Profile Picture">
                    <div class="post-user-info">
                        <h3 class="post-username">username</h3>
                        <p class="post-timestamp">2 hours ago</p>
                    </div>
                </div>
    
                <!-- Image Section (Optional) -->
                <div class="post-image">
                    <img src="images/dostikaftjall.png" alt="Post Image" class="post-img">
                </div>
    
                <!-- Description Section -->
                <div class="post-description">
                    <p>
                        description
                    </p>
                </div>
    
                <!-- Interaction Section -->
                <div class="post-interactions">
                    <button class="like-btn"><i class="fa-solid fa-heart"></i> Like</button>
                    <button class="comment-btn"><i class="fa-regular fa-comment"></i> Comment</button>
                </div>
            </div>

            

        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="JS/explorer.js"></script>
</body>
</html>