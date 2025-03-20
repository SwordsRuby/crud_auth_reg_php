<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<? if (isset($_FILES["file"])) {
    move_uploaded_file($_FILES["file"]["tmp_name"], "img/" . $_FILES["file"]["name"]);
} ?>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input id="file" type="file" name="file">
        <input type="submit" value="enter">
    </form>
    <img id="image" src="" alt="">
    <script>
        let file = document.getElementById("file");

        file.addEventListener('change', function() {
            file.style.background = 'url(' + URL.createObjectURL(file.files[0]) + ') center no-repeat';
            file.style.backgroundSize = 'cover';
        });
    </script>
    <style>
        #file {
            background: rgba(240, 240, 240, 0.6);
            width: 400px;
            height: 400px;
            border-radius: 10px;
            color: transparent;
        }

        #file::file-selector-button {
            display: none;
        }
    </style>
</body>

</html>