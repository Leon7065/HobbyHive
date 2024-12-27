<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" >
    <link rel="stylesheet" href="CSS/user.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <style>
        .posts{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }

        .posts img{
            width:96%;
            margin: 4px;
            height: 90%;
        }
    </style>

</head>
<body>

    <div class="left">
        <h1 ><a id="title" href="">HobbyHive</a></h1>
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
           
            <img src="images/Jon_Snow.png" alt="">
            <img src="images/Jon_Snow.png" alt="">
            <img src="images/Jon_Snow.png" alt="">
            <img src="images/Jon_Snow.png" alt="">
        </div>
    </div> 
</body>
</html>