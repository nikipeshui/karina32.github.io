<?php
$link = mysqli_connect("localhost", "s97762ev_site", "7EeD9Nds", "s97762ev_site");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


mysqli_close($link);
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Химчистка и прачечная "Карина" г.Брянск</title>
    <style>
        body
        {
            background-color: rgba(250, 242, 230, 1);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-dark" style="background-color:black !important;">
        <a class="navbar-brand" href="#">
            <img src="images/logoblack.png" width="110" height="110" class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #E4A4AB;">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" style="color:cornsilk !important" href="index.html">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:cornsilk !important" href="contactUs.html">Контакты</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" style="color:cornsilk !important" href="rewiews.php">Отзывы<span class="sr-only active">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:cornsilk !important" href="tel:+74832699597">Позвонить</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="https://vk.com/karinabryansk">
               <img src="images/vk-logo.svg" alt="вконтакте" width="30" height="25" title="vk" >
              </a>
            </li>
          </ul>
        </div>
    </nav>
    <br>
    <div class="container">
    <div class="form-row">
      <div class="col-md-6">
        <form name="rewiew_add" action="add.php" method="POST">
              <div class="form-group">
              <input name="name" type="name" class="form-control" id="exampleInputName1" placeholder="Имя">
              </div>
              <div class="form-group">
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Эл.адрес">
              </div>
            <div class="form-group">
                <textarea name="rewiew" id="" rows="6" class="form-control" placeholder="Добавьте сообщение..."></textarea>
            </div>
            <button type="submit" class="btn btn-success" style="justify-content: center !important;">Отправить</button>
          </form>
      </div>
      <div class="col-md-6"><a>12312</a></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', '2ed103d54410a450946d4743cdd07b67');
</script>
</body>
