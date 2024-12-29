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
            <h1 ><a id="title" href="user.php">HobbyHive</a></h1>
            <ul id="nav-bar-ul">
                <li class="nav-bar-options"><a href=""><i class="fa-regular fa-compass"></i> Explorer</a></li>
                <li class="nav-bar-options"><a href=""><i class="fa-solid fa-star"></i> H-Explorer</a></li>
                <li class="nav-bar-options"><a href=""><i class="fa-regular fa-message"></i> Messages</a></li>
                <li class="nav-bar-options"><a href=""><i class="fa-regular fa-envelope"></i> Notifications</a></li>
                <li class="nav-bar-options"><a href=""><i class="fa-solid fa-gear"></i> Settings</a></li>
                <li class="nav-bar-options"><a href=""><i class="fa-solid fa-plus"></i> Add post</a></li>
                <!-- <li id="nav-bar-options"><a href=""><i class="fa-solid fa-house"></i> Profile</a></li> -->
            </ul>
            <p id="log-out"><a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</a></p>
        </div>

        <hr id="left-right-hr">

        <div class="right">
            <div class="right-content"> <!-- -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>



            </div> <!-- -->
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="JS/explorer.js"></script>
</body>
</html>