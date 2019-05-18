<?php
$servername = "Localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password);

if ($conn -> connect_error){
    die("Connection failed: " . $conn -> connect_error);
}

$query = "CREATE DATABASE IF NOT EXISTS runalDB";
if ($conn->query($query) === TRUE){
    $query = "USE runalDB";

}else{
    echo "Error" . $conn->error;
}

$conn->query("USE runalDB");

$query = "CREATE TABLE IF NOT EXISTS about (
               id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
               header_content VARCHAR (200) NOT NULL,
               about_content VARCHAR (500)  NOT NULL,
               min_1 VARCHAR (30) NOT NULL,
               min_2 VARCHAR (30) NOT NULL,
               min_3 VARCHAR (30) NOT NULL,
               min_4 VARCHAR (30) NOT NULL,
               min_5 VARCHAR (30) NOT NULL,
               min_6 VARCHAR (30) NOT NULL,
               min_7 VARCHAR (30) NOT NULL,
               min_8 VARCHAR (30) NOT NULL,
               craete_date VARCHAR (25)  NOT NULL
)";
if ($conn->query($query) != TRUE) {
    echo $conn->error;
}

$query = "CREATE TABLE IF NOT EXISTS services(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(40) NOT NULL,
                content VARCHAR(250) NOT NULL,
                create_date VARCHAR (25) NOT NULL 
)";
if ($conn->query($query) != TRUE) {
    echo $conn->error;
}

$query = "CREATE TABLE IF NOT EXISTS testimonials (
               id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
               content VARCHAR (100) NOT NULL,
               authors VARCHAR (20) NOT NULL,
               create_date VARCHAR (25)  NOT NULL
)";
if ($conn->query($query) != TRUE) {
    echo $conn->error;
}

$query = "CREATE TABLE IF NOT EXISTS contact (
               id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
               phone VARCHAR (25) NOT NULL,
               email VARCHAR (25) NOT NULL,
               address VARCHAR (25) NOT NULL, 
               create_date VARCHAR (25)  NOT NULL
)";
if ($conn->query($query) != TRUE) {
    echo $conn->error;
}

