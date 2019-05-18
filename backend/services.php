<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INNOVA</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav id="menu-admin" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="about.php" class="page-scroll">О НАС</a></li>
                <li><a href="services.php" class="page-scroll">УСЛУГИ</a></li>
                <li><a href="projects.php" class="page-scroll">НАШЫ РАБОТЫ</a></li>
                <li><a href="testimonials.php" class="page-scroll">ОТЗЫВЫ</a></li>
                <li><a href="contact.php" class="page-scroll">КОНТАКТ</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="page-scroll">ГЛАВНАЯ</a></li>
                <li><a href="#" class="page-scroll">ВЫХОД</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="about">
    <div class="container">
        <h2>УСЛУГИ</h2>
        <?php
        require_once 'services_upload.php';
        require_once 'services_data.php';
        ?>
        <div class="row" id="admin-services">
            <div class="col-sm-3">
                <form  action="services.php" method="post" enctype="multipart/form-data">
                    <div class="custom-file mb-3">
                        <h4>Картинка</h4>
                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                        <label class="custom-file-label" for="customFile">Выбрать файл</label>
                    </div>
                    <div class="mt-3">
                        <button type="submit" id="file-btn" class="btn" name="file-btn">Отправить</button>
                    </div>
                </form>
            </div>
            <div class="row col-sm-9">
                <form action="services.php" method="post">
                    <div class="form-group col-sm-5">
                        <h4>Заголовок</h4>
                        <textarea class="form-control" rows="2" id="insert-title" name="insert-title" maxlength="40"><?php echo $_POST['insert-title'] ?></textarea>
                    </div>
                    <div class="form-group col-sm-7">
                        <h4>Контент</h4>
                        <textarea class="form-control" rows="2" id="insert-content" name="insert-content" maxlength="250"><?php echo $_POST['insert-content'] ?></textarea>
                    </div>
                    <div class="col-sm-10"></div>
                    <div class="mt-3 col-sm-2">
                        <button type="submit" id="text-btn" name="text-btn" class="btn">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="footer-admin">
    <div class="container text-center">
        <p>&copy; 2019</p>
    </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/admin.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script>
    window.onload = function() {
        history.replaceState("","","/backend/services.php");
    }
</script>
</body>
</html>