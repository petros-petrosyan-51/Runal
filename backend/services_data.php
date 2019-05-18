<?php
require_once 'db_connect.php';

class services_data {
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function Insert($title, $text) {
        $err = [];
        if (empty($title)) {
            $err[] = "<h4 class='error__content'>"."Заполните все поля!!!"."</h4>";
        }else {
            $title = $this->test_input($title);
        }
        if (empty($text)) {
            $err[] = "<h4 class='error__content'>"."Заполните все поля!!!"."</h4>";
        }else {
            $text = $this->test_input($text);
        }
        if(!empty($err)) {
            echo $err['0'];
        }else {
            $query = mysqli_query($this->conn, "SELECT COUNT(*) as count FROM `services`");
            $count = mysqli_fetch_array($query)['count'];
            $files = scandir("img/services/");
            array_splice($files,0, 2);
            if (count($files) <= $count) {
                echo "<h4 class='error__content'>"."Вы не добавили картинку!!!"."</h4>";
            }else {
                $query = "INSERT INTO services (title, content, create_date)
                    VALUES ('$title', '$text', NOW())";
                if ($this->conn->query($query) !== TRUE) {
                    echo $this->conn->error;
                } else {
                    echo "<h4 class='success__content'>" . "Статия успешно добавлено." . "</h4>";
                }
            }
        }
    }

    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$data = new services_data($conn);
if (isset($_POST['text-btn'])) {
    $data->Insert($_POST['insert-title'],$_POST['insert-content']);
}



