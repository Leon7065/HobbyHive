<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" >
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="CSS/user.css">
</head>
<body>
 
    <div class="left">
        <h1 ><a id="title" href="user.php">HobbyHive</a></h1>
        <ul id="nav-bar-ul">
            <li id="nav-bar-options"><a href=""><i class="fa-regular fa-compass"></i> Explorer</a></li>
            <li id="nav-bar-options"><a href=""><i class="fa-solid fa-star"></i> H-Explorer</a></li>
            <li id="nav-bar-options"><a href=""><i class="fa-regular fa-message"></i> Messages</a></li>
            <li id="nav-bar-options"><a href=""><i class="fa-regular fa-envelope"></i> Notifications</a></li>
            <li id="nav-bar-options"><a href=""><i class="fa-solid fa-gear"></i> Settings</a></li>
            <li id="nav-bar-options"><a href=""><i class="fa-solid fa-plus"></i> Add post</a></li>
            <!-- <li id="nav-bar-options"><a href=""><i class="fa-solid fa-house"></i> Profile</a></li> -->
        </ul>
        <p id="log-out"><a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</a></p>
    </div>  
    
    <hr id="left-right-hr">
    
    <div class="right">
        <div id="profile">
            <img id="pfp" src="images/Jon_Snow.png">
            
            <span id="profile-txt">
                <span id="u-e-container">
                    <p id="username">Username</p>
                    <button id="edit-btn">Edit Profile</button>
                </span>
                
                <p id="bio">Your bio goes here!</p>
                <p id="hobbies">Hobbies! -  </p>
            </span>
        </div>    
        
        <ul id="activity">
            <li><strong>15</strong> Posts</li>
            <li><strong>15</strong> Following</li>
            <li><strong>15</strong> Followers</li>
        </ul>
        <hr>    



        <div class="posts">

            <div class="card">
                <img id="card-image" src="images/Jon_Snow.png" alt="Avatar">
                <div class="interactioins">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-comment"></i>
                </div>
            </div>

            <div class="card">
                <img id="card-image" src="images/Jon_Snow.png" alt="Avatar">
                <div class="interactioins">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-comment"></i>
                </div>
            </div>

            <div class="card">
                <img id="card-image" src="images/Jon_Snow.png" alt="Avatar">
                <div class="interactioins">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-comment"></i>
                </div>             
            </div>  
        </div> 
    </div>

    <div class="preview" style="display: none;">

        <div class="post-image">
            <img src="images/dostikaftjall.png" alt="Post Image" class="post-img">
            <hr>
            <p class="description"></p>
        </div>

        <div class="post-content">
            <div class="post-profile">
                <div class="header">
                    <img src="" alt="Profile picture">
                    <strong>Username</strong>
                </div>
                <i class="fa-solid fa-ellipsis"></i>
            </div>

            <div class="comments">

                <ul class="comment">

                    <img src="" alt="Profile picture">
                    
                    <div class="comment-content">
                        
                        <div class="comment-text">
                            <p><strong>Username</strong>description</p>
                            <i class="fa-regular fa-heart"></i>
                        </div>

                        <div class="comment-interactions">
                            <p>timestamp</p>
                            <p>likes</p>
                            <p>reply</p>
                        </div>
                    
                    </div>
                </ul>
        
            </div>
            
        </div>

    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>
</html>