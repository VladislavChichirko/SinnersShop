<? ob_start();?>
<?php 
require "db.php"; // подключаем файл для соединения с БД 
// подключаем шапку проекта?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="ClothShop/font-awesome/css/font-awesome.min.css">  
  <link rel="icon" type="image/x-icon" href="images/icons/hell.ico">
  <link rel="stylesheet" href="css/dropdown.css">
  <script src="js/dropsdown.js"></script>
  <script src='js/modalwindow.js'></script>
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
  <link rel="stylesheet" href="css/clothpage.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<?php
			require_once "php/functions.php";
			connectDB();
		
      $cloth = getCloth(1, $_GET["id"]);
      
		?>



<!---HEADER-->
<header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__logo"><img src="images/logo.svg"></div>
          <nav class="nav">
            <a class="nav__links" href="index.php">Main</a>
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


  <!--Container-->
        <main class="sp_main">
          <div class="intro">
            

          <div class="product_prev" >
            <div class ="shirt">
            <?php
                echo ' <img src ="products/'.$cloth["Pic"].'.png"> '; ?>
            </div>
          </div>
                <div class="product_descript">
                <?php 
                  echo '
                <h1>  '.$cloth["Title"].' </h1> ';  ?>
                  
                  <strong>
                    <?php 
                  echo '
                <h1>  '.$cloth["Price"].'.00$ </h1> ';  ?>
                  </strong>


                <p class="descriptTitlte">Description </p>
                <ul class="descriptPoints">
                  <li>Stylish</li>
                  <li>slightly lowered shoulder line</li>
                  <li>Indelible print</li>
                  <li>100% cotton </li>




                </ul>
                <strong>Only Oversize , we doesn't send small sizes</strong>

                </div>


             <div class="buy_butt">
              
              <button id="myBtn" class="button">Buy</button>
                        <!-- The Modal -->
            <div id="myModal" class="modal">

            <script>
                    
                  function AlertBtn() {
                    alert("Your order is completed");
                  }
                 
                  
                  </script>   
                  





            <script>
   function AlertBtnError() {
                    alert("Error");
                  }
</script>


<?php 


// Создаем переменную для сбора данных от пользователя по методу POST
$data = $_POST;

// Пользователь нажимает на кнопку "Зарегистрировать" и код начинает выполняться
if(isset($data['apply'])) {

        // Регистрируем
        // Создаем массив для сбора ошибок
  $errors = array();

  // Проводим проверки
        // trim — удаляет пробелы (или другие символы) из начала и конца строки

  if(trim($data['address']) == '') {

    $errors[] = "Введите адрес";
  }


  if(trim($data['name']) == '') {

    $errors[] = "Введите Имя";
  }

    if(trim($data['email']) == '') {

    $errors[] = "Введите Email";
  }
    if(trim($data['city']) == '') {

    $errors[] = "Введите город";
  }
    



  if(empty($errors)) {

    // Все проверено, регистрируем
    // Создаем таблицу users
    $orders = R::dispense('orders');

                // добавляем в таблицу записи
    $orders->name = $data['name'];
    $orders->email = $data['email'];
    $orders->address = $data['address'];
    $orders->city = $data['city'];
    $orders->product = $cloth["Title"];

    // Сохраняем таблицу
    R::store($orders);
    echo "<script>AlertBtn();</script>";

  } else {

        echo "<script>AlertBtnError();</script>";
                // array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
  }
}
?>


<!-- Modal content -->
<form action "cloth.php" method="post">
<div class="modal-content">
            <div class="text">Please enter info before you buy our product </div>
              <span class="close">&times;</span>
              <label class="innertext "for="fname"><i class="fas fa-user"></i> Full Name</label>

               <input type="text" id="fname" name="name" placeholder="John M. Doe">

            <label  class="innertext"  for="email"><i class="fa fa-envelope"></i> Email</label>


               <input  type="text" id="email" name="email" placeholder="john@example.com">

            <labe  class="innertext" for="adr"><i class="fas fa-map-marker-alt"></i> Address</label>

               <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">

            <label class="innertext" for="city"><i class="fas fa-globe"></i> City</label>

               <input type="text" id="city" name="city" placeholder="New York">

               <button class="button2" name="apply" type="submit" >Apply</button>

            </div>

          </div>
          </form>
                
       
          <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
        </main>
        <?php require "footer.html" ?>
</body>
</html>