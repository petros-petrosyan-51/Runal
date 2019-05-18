<?php
require_once 'db_connect.php';

$errors = [];
$query = mysqli_query($conn,"SELECT id FROM `services` ORDER BY id DESC LIMIT 0 , 1");
$lastId = mysqli_fetch_array($query)['id'];
$target_dir = "img/services/";
$target_file = $target_dir . basename($_FILES["filename"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST["file-btn"])) {
    $check = getimagesize($_FILES["filename"]["tmp_name"]);
    if ($check === false) {
        $errors[] = "<h4 class='error__content'>" . "Файл не явлаяется изображением!" . "</h4>";
    }
    if (file_exists($target_file)) {
        $errors[] = "<h4 class='error__content'>" . "Файл с таким именем уже существует!" . "</h4>";
    }
    if ($_FILES["filename"]["size"] > 500000) {
        $errors[] = "<h4 class='error__content'>" . "Файл слышком большого размера!" . "</h4>";
    }
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        $errors[] = "<h4 class='error__content'>" . "Только JPEG JPG PNG GIF формата!" . "</h4>";
    }
    if (!empty($errors)) {
        echo $errors['0'];
    } else {
        $temp = ['jpg'];
        $newFilename = ($lastId + 1) . '.' . end($temp);
        if (move_uploaded_file($_FILES["filename"]["tmp_name"], $target_dir.$newFilename)) {
            echo "<h4 class='success__content'>" . "Картинка успешно загружен." . "</h4>";
        }
    }
}



