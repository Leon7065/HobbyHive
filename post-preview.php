<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/post-preview.css">
    
</head>
<body>
    <!-- if there is no image: description and under that comments -->
    
    <div id="delete-post-overlay"></div>

    <div id="delete-post-confirm">
        <h5>Are you sure you want to delete this post?</h5>
        <p class="no" >No</p>
        <p class="delete" >Delete</p>
    </div>

    <div id="delete-comment-confirm">
        <h5>Are you sure you want to delete this comment?</h5>
        <p class="no" id="no">No</p>
        <p class="delete" id="delete">Delete</p>
    </div>

    <div class="show"><p>click</p></div>
    
    <div id="overlay"></div>
    <div class="preview">
        <div class="post-image">
            <img src="images/winterfell.jpg" alt="Post Image" class="post-img">
            <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas eum animi ratione nisi nihil eaque similique, sapiente laudantium voluptatibus, explicabo dolore temporibus dolorum omnis ipsa est, repellat dolorem nemo minus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt odit consectetur laboriosam. Dignissimos, voluptate? Doloremque, animi. Suscipit praesentium ea quia ducimus possimus. Iste aliquam debitis ab quos nesciunt vero consequatur!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti, sunt saepe? Molestias mollitia quisquam ex distinctio ratione necessitatibus nostrum odit optio? Odio voluptatibus quam quis tenetur ab sequi doloribus numquam?
            </p>
        </div>

        <div class="post-content">
            <div class="post-profile">
                <div class="header">
                    <img src="images/Jon_Snow.png" class="pfp" alt="Profile picture">
                    <strong>ThePrinceThatWasPromised</strong>
               </div>
                <div id="delete-post-container">
                   <i id="delete-post-ellipsis" class="fa-solid fa-ellipsis"></i>
                   <button id="delete-post-btn" class="delete-btns">Delete</button>
                </div>
            </div>

            <hr style="margin: 2px;">

            <div class="comments">
                <div class="comment">
                    <div class="comment-content" >
                        <div class="comment-text">
                            <img src="images/" class="pfp" alt="Profile picture">
                            <p><strong>Username</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque laborum culpa autem adipisci quasi accusamus nam inventore consectetur illo praesentium! Earum provident nulla harum voluptatum voluptas cupiditate asperiores dicta culpa.</p>
                        </div>
                        <i class="fa-regular fa-heart comment-like" style="transform: translateY(10px);"></i>
                    </div>

                    <div class="comment-interactions">
                        <p>timestamp</p>
                        <p>15 likes</p>
                        <div class="delete-comment-container">
                            <i class="fa-solid fa-ellipsis ellipsis" id="delete-comment-ellipsis" style="transform: translateY(4px);"></i>
                            <button id="delete-comment-btn" class="delete-btns" >Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="margin: 2px;">

            <div class="interactivity">
                <div class="like-section">
                    <button class="like-button" id="like-btn"><i class="fa-regular fa-heart" id="like" ></i> <span class="like-text">Like?</span></button>
                    <p>37 likes</p>
                </div>
                <form action="" class="add-comment">
                    <input type="text" placeholder="Add a comment..." required>
                    <button type="submit" id="post-comment">post</button>
                </form>
            </div>

        </div>
    </div>
    <script src="JS/post-preview.js" ></script>
</body>
</html>