<?php
/*ini_set('upload_max_filesize', '1M'); 
if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
if ($_FILES['inputfile']['error'] == UPLOAD_ERR_OK && $_FILES['inputfile']['type'] == 'image/jpeg') {
$destiation_dir = dirname("../images") . '/' . $_FILES['inputfile']['name']; 
if (move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir)) { 
echo 'File Uploaded';

} else {
echo 'File not uploaded';
}
} else {
switch ($_FILES['inputfile']['error']) {
case UPLOAD_ERR_FORM_SIZE:
case UPLOAD_ERR_INI_SIZE:
echo 'File Size exceed';
brake;
case UPLOAD_ERR_NO_FILE:
echo 'FIle Not selected';
break;
default:
echo 'Something is wrong';
}
}
}*/
?>
<!--<html>
<head>
<title>Secure File Upload</title>
</head>
<body>
<h1>Secure File Upload</h1>
<form method="post" action="" enctype="multipart/form-data">
<label for="inputfile">Upload File</label>
<input type="file" id="inputfile" name="inputfile"><br>
<input type="submit" value="Click To Upload">
</form>
</body>
</html>-->

<?php
//if($_FILES['inputfile']['error'] == UPLOAD_ERR_OK && $_FILES['inputfile']['type'] == 'image/jpeg'){ // Проверяем, загрузил ли пользователь файл
if(isset($_POST['submit'])){ // Проверяем, загрузил ли пользователь файл
//$destiation_dir = dirname("../images") .'/'.$_FILES['inputfile']['name']; // Директория для размещения файла
$destiation_dir = "../images"; // Директория для размещения файла
move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию
echo 'File Uploaded'; // Оповещаем пользователя об успешной загрузке файла
}
/*else{
echo 'No File Uploaded'; // Оповещаем пользователя о том, что файл не был загружен
}*/
?>
<html>
<head>
<title>Basic File Upload</title>
</head>
<body>
<h1>Basic File Upload</h1>
<form method="post" action="" enctype="multipart/form-data">
<label for="inputfile">Upload File</label>
<input type="file" id="inputfile" name="inputfile"><br>
<input type="submit" name="submit" value="Click To Upload">
</form>
</body>
</html>

<!--
http://www.internet-technologies.ru/articles/php-skript-dlya-zagruzki-faylov.html

https://www.youtube.com/watch?v=4I0agpUaTJg&vl=de
-->