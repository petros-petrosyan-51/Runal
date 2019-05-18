<?php
require_once "db_connect.php";
$data = $_POST;


$header_content = $data['insert-title-1'];
$about_content = $data['insert-title-2'];
$min_1 = $data['insert-title-3'];
$min_2 = $data['insert-title-4'];
$min_3 = $data['insert-title-5'];
$min_4 = $data['insert-title-6'];
$min_5 = $data['insert-title-7'];
$min_6 = $data['insert-title-8'];
$min_7 = $data['insert-title-9'];
$min_8 = $data['insert-title-10'];
$data_create = date("I ds FY h:i:s A");
if (isset($_POST['action']) && $_POST['action'] == 'login') {
    $query = "INSERT INTO about (`header_content`,`about_content`,`min_1`,`min_2`,`min_3`,`min_4`,`min_5`,`min_6`,`min_7`,`min_8`,`craete_date`)
                 VALUES ('$header_content','$about_content','$min_1','$min_2','$min_3','$min_4','$min_5','$min_6','$min_7','$min_8','$data_create')";
    if ($conn->query($query) !== TRUE) {
        echo $conn->error;
    }
}
if (isset($_POST['action']) && $_POST['action'] == 'select') {
    $query = mysqli_query($conn, "SELECT COUNT(*) as count FROM `about`");
    $count = mysqli_fetch_array($query)['count'];
    $query = mysqli_query($conn, "SELECT  `header_content`,`about_content`,`min_1`,`min_2`,`min_3`,`min_4`,`min_5`,`min_6`,`min_7`,`min_8`,`craete_date` FROM `about` WHERE id= '$count'");
    $name = mysqli_fetch_array($query);
    $get = $name["header_content"];

}
//echo "<p>$get</p>";
echo json_encode($name);








