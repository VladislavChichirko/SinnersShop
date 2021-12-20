<? ob_start();?>
<?php require "db.php"; // подключаем файл для соединения с БД ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SinnersCloth</title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="ClothShop/font-awesome/css/font-awesome.min.css">  
  <link rel="icon" type="image/x-icon" href="images/icons/hell.ico">
  <link rel="stylesheet" href="css/dropdown.css">
  <script src="js/dropsdown.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>

  <!---HEADER-->
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__logo"><img src="images/logo.svg"></div>
          <nav class="nav">
            <a class="nav__links" href="#">Main</a>
            <a class="nav__links" href="collection.html">COLLECTION</a>
            <a class="nav__links" href="men.php">MEN</a>
            <a class="nav__links" href="women.php">WOMEN</a>    
            <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">USER
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                          <a href="signup.php">Reg In     <i class="fas fa-sign-in-alt"></i></a>
                          <a href="login.php">Log IN     <i class="far fa-user"></i></a>
                          <a href="logout.php">EXIT       <i class="fas fa-times"></i></a>
                        </div>
                   
                    </div>
           
          </nav>
      </div>
    </div>
  </header>
  <?php if(isset($_SESSION['logged_user'])) 
  {
  echo '
  <div class="hi_123">
    Привет, '. $_SESSION['logged_user']->name.'</div>';
  }
?>
  <!---SLIDER-->
  <div class="text_intro">Our Bestsellers</div>
  <div class="wrapper">
    <div class="slider">
      <div class="slider__item filter">
        <img src="images/slider/01.jpg" alt="">
      </div>
      <div class="slider__item">
        <img src="images/slider/02.jpg" alt="">
      </div>
      <div class="slider__item filter">
        <img src="images/slider/03.jpg" alt="">
      </div>
      <div class="slider__item">
        <img src="images/slider/04.jpg" alt="">
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/slick.js"></script>
  </div>

  <?php require "footer.html" ?>
</body>
</html>