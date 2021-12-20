
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


    // Сохраняем таблицу
    R::store($orders);
        echo '<div style="color: green; ">Вы успешно зарегистрированы! Можно авторизоваться</a>.</div><hr>';

  } else {
                // array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
    echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
  }
}
?>



<!-- Modal content -->
  
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

            <button class="button2" name="apply" > Apply </button>

            </div>

          </div>