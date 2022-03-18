<?php
if(isset($_FILES) && $_FILES['inputfile']['error'] == 0){
    $destiation_dir = dirname(__FILE__) .'/'.$_FILES['inputfile']['name'];
    move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir );
    echo 'Файл загружен';
}
else{
    echo 'Файл не загружен';
}
?>
<html>
<head>
    <title>File upload</title>
</head>
<body>
<h1>Загрузка файла</h1>
<form method="post" action="upload.php" enctype="multipart/form-data">
    <label for="inputfile">Загрузить файл</label>
    <input type="file" id="inputfile" name="inputfile"></br>
    <input type="submit" value="Нажмите для загрузки">
</form>
</body>
</html>
