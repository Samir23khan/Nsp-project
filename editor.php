<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog : Editor</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/editor.css">
</head>
<body>
    <?php
        // PHP code can be added here for server-side processing or data manipulation
    ?>

    <div class="banner">
        <input type="file" accept="image/*" id="banner-upload" hidden>
        <label for="banner-upload" class="banner-upload-btn"><img src="img/upload.png" alt="upload banner"></label>
    </div>

    <div class="blog">
        <textarea type="text" class="title" placeholder="Blog title..."></textarea>
        <textarea type="text" class="article" placeholder="Start writing here..."></textarea>
        
    </div>

    <div class="blog-options">
        <button class="btn dark publish-btn">publish</button>
        <input type="file" accept="image/*" id="image-upload" hidden>
        <label for="image-upload" class="btn grey upload-btn">Upload Image</label>
    </div>

    <?php
        // Additional PHP code can be added here for server-side processing or data manipulation
    ?>
</body>
</html>
