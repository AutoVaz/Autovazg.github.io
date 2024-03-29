<?php
include("db.php");

$json = json_decode($_POST['jsonData']);

if (array_key_exists("country", $json)) {
    $sql = "INSERT INTO aircraftorder (location, 
                                   whereAir, 
                                   startDate, 
                                   endDate, 
                                   status, 
                                   lastName, 
                                   `name`, 
                                   otherName, 
                                   sex, 
                                   birthday, 
                                   numberDocument,
                                   mail,
                                   adults,
                                   children,
                                   childrenBefore,
                                   phone,
                                   country,
                                   city,
                                   summaHotel,
                                   summaAir,
                                   numbers,
                                   name_hotel,
                                   adress_hotel)
        VALUES ('"  . $json->location . "','"
        . $json->whereAir . "','"
        . $json->sd . "','"
        . $json->ed . "','"
        . $json->classStatus . "','"
        . $json->lastName . "','"
        . $json->name . "','"
        . $json->otherName . "','"
        . $json->sex . "','"
        . $json->birthday . "','"
        . $json->numberDocument . "','"
        . $json->mail . "','"
        . $json->adults . "','"
        . $json->children . "','"
        . $json->childrenBefore . "','"
        . $json->phone . "','"
        . $json->country . "','"
        . $json->city . "','"
        . $json->summaAir . "','"
        . $json->summaHotel . "','"
        . $json->name_hotel . "','"
        . $json->adress_hotel . "','"
        . $json->numbers . "')";
} else {
    $sql = "INSERT INTO aircraftorder (location, 
                                   whereAir, 
                                   startDate, 
                                   endDate, 
                                   status, 
                                   lastName, 
                                   `name`, 
                                   otherName, 
                                   sex, 
                                   birthday, 
                                   numberDocument,
                                   mail,
                                   adults,
                                   children,
                                   childrenBefore,
                                   summaAir,
                                   phone)
        VALUES ('"  . $json->location . "','"
        . $json->whereAir . "','"
        . $json->sd . "','"
        . $json->ed . "','"
        . $json->classStatus . "','"
        . $json->lastName . "','"
        . $json->name . "','"
        . $json->otherName . "','"
        . $json->sex . "','"
        . $json->birthday . "','"
        . $json->numberDocument . "','"
        . $json->mail . "','"
        . $json->adults . "','"
        . $json->children . "','"
        . $json->childrenBefore . "','"
        . $json->summaAir . "','"
        . $json->phone . "')";
}


if (mysqli_query($link, $sql)) {

    // получатель
    $to = 'Liner.travel01@gmail.com, '. $json->mail; // обратите внимание на запятую

    // тема письма
    $subject = 'Ваш заказ принят';


    if (array_key_exists("country", $json)) {
        // текст письма
    $message = '
    <html>
    <head>
      <title>Ваш заказ принят</title>
    </head>
    <body>
      <h1>Поздравляем ваш заказ принят!</h1>
      <p>Можете забрать ваш билет с нашего офиса.</p>
      <hr>
      <table style="width: 100%; text-align: center;" cellspacing="2" border="1">
        <tr>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Откуда</th>
            <th>Куда</th>
            <th>Дата вылета</th>
            <th>Дата приезда</th>
            <th>Класс</th>
            <th>Пол</th>
        </tr>
        <tr>
            <td>' . $json->lastName . '</td>
            <td>' . $json->name . '</td>
            <td>' . $json->otherName . '</td>
            <td>' . $json->location . '</td>
            <td>' . $json->whereAir . '</td>
            <td>' . $json->sd . '</td>
            <td>' . $json->ed . '</td>
            <td>' . $json->classStatus . '</td>
            <td>' . $json->sex . '</td>
        </tr>
      </table>
      <br>
      
      <h2>Cумма за билет - '. $json->summaAir .'</h2>
      
      <table style="width: 100%; text-align: center;" cellspacing="2" border="1">
       <tr>
              <th>Дата рождение:</th>
              <th>Почта</th>
              <th>Количество взрослых</th>
              <th>Количество детей от 2-11</th>
              <th>Телефон</th>
              <th>Страна</th>
              <th>Город</th>
              <th>Номер</th>
              <th>Название отели</th>
              <th>Адрес отеля</th>
        </tr>
        <tr>
            <td>' . $json->birthday . '</td>
            <td>' . $json->mail . '</td>
            <td>' . $json->adults . '</td>
            <td>' . $json->children . '</td>
            <td>' . $json->phone . '</td>
            <td>' . $json->country . '</td>
            <td>' . $json->city . '</td>
            <td>' . $json->numbers . '</td>
            <td>' . $json->name_hotel  . '</td>
            <td>' . $json->adress_hotel . '</td>
        </tr>
        </table>
        
      <h2>Cумма за гостиницу - '. $json->summaHotel .'</h2>
      
      <hr>
           
      <h2>Наши контакты: </h2>
      <p><b>Адрес:</b> Казахстан, Астана, Аль-Фараби 75</p>
      <p><b>Телефон:</b> 8(707) 787-76-76</p>
      <p><b>Факс:</b> 8(707) 787-76-76</p>
    </body>
    </html>
    ';

    } else {
        $message = '
    <html>
    <head>
      <title>Ваш заказ принят</title>
    </head>
    <body>
      <h1>Поздравляем ваш заказ принят!</h1>
      <p>Можете забрать ваш билет с нашего офиса.</p>
      <hr>
      <table style="width: 100%; text-align: center;" cellspacing="2" border="1">
        <tr>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Откуда</th>
            <th>Куда</th>
            <th>Дата вылета</th>
            <th>Дата приезда</th>
            <th>Класс</th>
            <th>Пол</th>
        </tr>
        <tr>
            <td>' . $json->lastName . '</td>
            <td>' . $json->name . '</td>
            <td>' . $json->otherName . '</td>
            <td>' . $json->location . '</td>
            <td>' . $json->whereAir . '</td>
            <td>' . $json->sd . '</td>
            <td>' . $json->ed . '</td>
            <td>' . $json->classStatus . '</td>
            <td>' . $json->sex . '</td>
        </tr>
      </table>
      <br>
      
      <table style="width: 100%; text-align: center;" cellspacing="2" border="1">
       <tr>
              <th>Дата рождение:</th>
              <th>Почта</th>
              <th>Количество взрослых</th>
              <th>Количество детей от 2-11</th>
              <th>Телефон</th>
        </tr>
        <tr>
            <td>' . $json->birthday . '</td>
            <td>' . $json->mail . '</td>
            <td>' . $json->adults . '</td>
            <td>' . $json->children . '</td>
            <td>' . $json->phone . '</td>
        </tr>
        </table>
      <h2>Cумма за билет - '. $json->summaAir .'</h2>
      <hr>
      <h2>Наши контакты: </h2>
      <p><b>Адрес:</b> Казахстан, Астана, Аль-Фараби 75</p>
      <p><b>Телефон:</b> 8(707) 787-76-76</p>
      <p><b>Факс:</b> 8(707) 787-76-76</p>
    </body>
    </html>
    ';
    }

    // Для отправки HTML-письма должен быть установлен заголовок Content-type
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF8' . "\r\n";

    // Отправляем
    mail($to, $subject, $message, $headers, "-f travel01@gmail.com");

    echo "success";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);