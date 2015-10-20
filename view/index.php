<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap   -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
              <span class="sr-only">Открыть навигацию</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Логотип</a>
          </div>
          <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a class-"dropdown-toggle" data-toggle="dropdown" href="#">пункт 1 <b class="caret"></b></a> 
                <ul class="dropdown-menu">
                  <li><a href="#"></a>пункт 1</li>
                  <li><a href="#"></a>пункт 2</li>
                  <li><a href="#"></a>пункт 3</li>
                  <li><a href="#"></a>пункт 4</li>
                </ul>>   
              </li>
              <li class="dropdown">
                <a class-"dropdown-toggle" data-toggle="dropdown" href="#">пункт 2 <b class="caret"></b></a> 
                <ul class="dropdown-menu">
                  <li><a href="#"></a>пункт 1</li>
                  <li><a href="#"></a>пункт 2</li>
                  <li><a href="#"></a>пункт 3</li>
                  <li><a href="#"></a>пункт 4</li>
                </ul>>   
              </li>
              <li class="dropdown">
                <a class-"dropdown-toggle" data-toggle="dropdown" href="#">пункт 3 <b class="caret"></b></a> 
                <ul class="dropdown-menu">
                  <li><a href="#"></a>пункт 1</li>
                  <li><a href="#"></a>пункт 2</li>
                  <li><a href="#"></a>пункт 3</li>
                  <li><a href="#"></a>пункт 4</li>
                </ul>>   
              </li>
              <li class="dropdown">
                <a class-"dropdown-toggle" data-toggle="dropdown" href="#">пункт 4 <b class="caret"></b></a> 
                <ul class="dropdown-menu">
                  <li><a href="#"></a>пункт 1</li>
                  <li><a href="#"></a>пункт 2</li>
                  <li><a href="#"></a>пункт 3</li>
                  <li><a href="#"></a>пункт 4</li>
                </ul>>   
              </li>
            </ul>
          </div>
        </div>
</div>

<div id="carousel" class="carousel slide">
<!-- Индикаторы слайдов -->
  <ol class="carousel-indicators">
    <li class="active" data-target="#carousel" data-slide="0"></li>
    <li data-target="#carousel" data-slide="1"></li>
    <li data-target="#carousel" data-slide="2"></li>
    <li data-target="#carousel" data-slide="3"></li>
  </ol>
<!-- слайды -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/1.png" alt="photo1">
      <div class="carousel-caption">
        <h3>Первый слайд</h3>
        <p>Описание первого слайда</p>
      </div>
    </div>
    <div class="item">
      <img src="img/2.png"  alt="photo2">
      <div class="carousel-caption">
        <h3>Второй слайд</h3>
        <p>Описание второго слайда</p>
      </div>
    </div>
    <div class="item">
      <img src="img/3.png" alt="photo3">
      <div class="carousel-caption">
        <h3>Третий слайд</h3>
        <p>Описание третьего слайда</p>
      </div>
    </div>
    <div class="item">
      <img src="img/4.png" alt="photo4">
      <div class="carousel-caption">
        <h3>Четвертый слайд</h3>
        <p>Описание четвертого слайда</p>
      </div>
    </div>
  </div>
<!-- Стрелки переключения слайдов -->
  <a href="#carousel"class="left carousel-control" data-slide="prev">
      <span class="gliphicon gliphicon-chevron-left"></span>
    </a>
    <a href="#carousel"class="right carousel-control" data-slide="next">
      <span class="gliphicon gliphicon-chevron-right"></span>
    </a>
</div>

  <div class="container">
    <div class="row">
      <h1>Название страницы</h1>
    </div>
  </div>

    <!--<div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 hidden-md">
          <div class="row ">
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
          </div>
        </div>
        <div class="col-lg-3" ></div>
        <div class="col-lg-3" ></div>
        <div class="col-lg-3" ></div>
      </div>
    </div>-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>