<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INNOVA</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
< id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav id="menu-admin" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="about.php" class="page-scroll">О НАС</a></li>
                <li><a href="services.php" class="page-scroll">УСЛУГИ</a></li>
                <li><a href="projects.php" class="page-scroll">НАШЫ РАБОТЫ</a></li>
                <li><a href="testimonials.php" class="page-scroll">ОТЗЫВЫ</a></li>
                <li><a href="contact.php" class="page-scroll">КОНТАКТ</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/frontend/index.php" class="page-scroll">ГЛАВНАЯ</a></li>
                <li><a href="#" class="page-scroll">ВЫХОД</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="about">
    <div class="container">
        <h2>О НАС</h2>


        <div class="row" id="admin-services">

            <!--  главный-->
            <div class="col-sm-3">

                <form action="about_upload.php" method="post" enctype="multipart/form-data">
                    <div class="custom-file mb-3">
                        <h4>Картинка (Главная)</h4>
                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                        <label class="custom-file-label" for="customFile">Выбрать файл</label>
                    </div>
                    <div class="mt-3">
                        <input type="submit" id="file-btn" class="btn" name="file-btn">
                    </div>
                </form>


            </div>
            <div class="row col-sm-9" id="about-row-col">


                <form id="form-send" method="post">

                    <div class="form-group col-sm-5">
                        <h4>Главный контент</h4>
                        <textarea class="form-control-about" rows="2" id="insert-title" name="insert-title-1"
                                  maxlength="200"></textarea>
                    </div>

                    <div class="mt-3 col-sm-2">
                        <button type="submit" id="text-btn" name="text-btn" class="btn">Добавить</button>
                    </div>
                </form>
            </div>


            <!--    <кто мы-->
            <div class="col-sm-3">
                <form action="about_upload_2.php" method="post" enctype="multipart/form-data">
                    <div class="custom-file mb-3">
                        <h4>Картинка (Кто мы)</h4>
                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                        <label class="custom-file-label" for="customFile">Выбрать файл</label>
                    </div>
                    <div class="mt-3">
                        <input type="submit" id="file-btn-2" class="btn" name="file-btn-2">
                    </div>
                </form>
            </div>

            <div class="row col-sm-9" id="about-row-col">
                <form id="form-send-2" action="#" method="post">

                    <div class="form-group col-sm-5">
                        <h4>Кто мы</h4>
                        <textarea class="form-control-about" rows="2" id="insert-title-1" name="insert-title-2"
                                  maxlength="500"></textarea>
                    </div>

                    <div class="mt-3 col-sm-2">
                    </div>
                </form>
            </div>
            <!--<--мини 1-->
            <div class="row col-sm-9" id="about-row-col-mini">
                <form id="form-send-3" action="#" method="post">

                    <div class="form-group col-sm-5" id="form-group col-sm-5 mini">
                        <h4>мини 1</h4>
                        <textarea class="form-control-about-mini" rows="2" id="insert-title-2" name="insert-title-3"
                                  maxlength="30"></textarea>
                    </div>

                    <div class="mt-3 col-sm-2">
                    </div>
                </form>
            </div>
            <!--    <!-мини 2-->
            <div class="row col-sm-9" id="about-row-col-mini">
                <form id="form-send-4" action="#" method="post">

                    <div class="form-group col-sm-5" id="form-group col-sm-5 mini">
                        <h4>мини 2</h4>
                        <textarea class="form-control-about-mini" rows="2" id="insert-title-3" name="insert-title-4"
                                  maxlength="30"></textarea>
                    </div>

                    <div class="mt-3 col-sm-2">
                    </div>
                </form>
            </div>
            <!--    <--мини 3-->
            <div class="row col-sm-9" id="about-row-col-mini">
                <form id="form-send-5" action="#" method="post">

                    <div class="form-group col-sm-5" id="form-group col-sm-5 mini">
                        <h4>мини 3</h4>
                        <textarea class="form-control-about-mini" rows="2" id="insert-title-4" name="insert-title-5"
                                  maxlength="30"></textarea>
                    </div>

                    <div class="mt-3 col-sm-2">
                    </div>
                </form>
            </div>
            <!--    <--мини 4-->
            <div class="row col-sm-9" id="about-row-col-mini">
                <form id="form-send-6" action="#" method="post">

                    <div class="form-group col-sm-5" id="form-group col-sm-5 mini">
                        <h4>мини 4</h4>
                        <textarea class="form-control-about-mini" rows="2" id="insert-title-5" name="insert-title-6"
                                  maxlength="30"></textarea>
                    </div>

                    <div class="mt-3 col-sm-2">
                    </div>
                </form>
            </div>
            <!--    <--мини 5-->
            <div class="row col-sm-9" id="about-row-col-mini">
                <form id="form-send-7" action="#" method="post">

                    <div class="form-group col-sm-5" id="form-group col-sm-5 mini">
                        <h4>мини 5</h4>
                        <textarea class="form-control-about-mini" rows="2" id="insert-title-6" name="insert-title-7"
                                  maxlength="30"></textarea>
                    </div>

                    <div class="mt-3 col-sm-2">
                    </div>
                </form>
            </div>
            <!--    <--мини 6-->
            <div class="row col-sm-9" id="about-row-col-mini">
                <form id="form-send-8" action="#" method="post">

                    <div class="form-group col-sm-5" id="form-group col-sm-5 mini">
                        <h4>мини 6</h4>
                        <textarea class="form-control-about-mini" rows="2" id="insert-title-7" name="insert-title-8"
                                  maxlength="30"></textarea>
                    </div>

                    <div class="mt-3 col-sm-2">
                    </div>
                </form>
            </div>
            <!--    <--мини 7-->
            <div class="row col-sm-9" id="about-row-col-mini">
                <form id="form-send-9" action="#" method="post">

                    <div class="form-group col-sm-5" id="form-group col-sm-5 mini">
                        <h4>мини 7</h4>
                        <textarea class="form-control-about-mini" rows="2" id="insert-title-8" name="insert-title-9"
                                  maxlength="30"></textarea>
                    </div>

                    <div class="mt-3 col-sm-2">
                    </div>
                </form>
            </div>
            <!--    <!-мини 8-->
            <div class="row col-sm-9" id="about-row-col-mini">
                <form id="form-send-10" action="#" method="post">

                    <div class="form-group col-sm-5" id="form-group col-sm-5 mini">
                        <h4>мини 8</h4>
                        <textarea class="form-control-about-mini" rows="2" id="insert-title-9" name="insert-title-10"
                                  maxlength="30"></textarea>
                    </div>

                    <div class="mt-3 col-sm-2">
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

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/about-js.js"></script>


</body>
</html>