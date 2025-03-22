<form method="post" enctype="multipart/form-data">
    <div class="file_block">
        <h2 class="files_title">выберите файл</h2>
        <input onchange="fileChange(this);" type="file" name="file" id="file">
    </div>
    <input type="text" name="text">
    <input type="submit" value="fwef">
</form>

<a href="main">main</a>

<? if (isset($_FILES['file'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], 'images/' . $_FILES['file']['name']);
} ?>

<style>
    #file::file-selector-button {
        display: none;
    }

    #file {
        font-size: 0;
        height: 500px;
        display: flex;
        background: rgba(46, 46, 46, 0.9);
        color: transparent;
        border-radius: 10px;
        border: 2px solid #464646;
        width: 400px;
        cursor: pointer;
    }

    .file_block {
        width: 300px;
        height: 500px;
        position: relative;
        margin-bottom: 10px;
    }

    .files_title {
        pointer-events: none;
        z-index: 3;
        color: white;
        position: absolute;
        color: white;
        text-align: center;
        width: 400px;
        height: 500px;
        top: 200px;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<script>
    let file = document.getElementById('file');
    let files_title = document.getElementsByClassName('files_title');

    file.addEventListener('change', function() {
        let files_title = document.getElementsByClassName('files_title');
        file.style.background = 'url(' + URL.createObjectURL(file.files[0]) + ') center no-repeat';
        file.style.backgroundSize = 'contain';
        files_title[0].style.display = 'none';
    });
</script>