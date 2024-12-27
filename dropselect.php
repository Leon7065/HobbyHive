<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/drop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" >
</head>
<body>
    
    <div class="container">
        <div class="select-btn">
            <span class="btn-text">Select Language</span>
            <span>
                <button class="arrow-down" style="border: none;" onclick="confirm()">
                    <i class="fa-solid fa-arrow-down-long"></i>
                </button> 
            </span>
        </div>

        <ul class="list-items">
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Photography</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Cooking</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Guitar</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Drawing</span>
            </li>
            <li class="item">
                <span class="checkbox">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="item-text">Singing</span>
            </li>
        </ul>
    </div>
 
    <script src="JS/drop.js"></script>
</body>
</html>