<!DOCTYPE html>
<html lang="ru">

<?php

include("head.php");

?>

<body>

<section class="home-page-nav dynamic-content">

    <?php

    include("menu.php");

    ?>

</section>

<div class="container">
    <h1 class="title-big">Байланыс</h1>
    <p><b tkey="adress">Адрес:</b> Казахстан, Нұр-Сұлтан, Аль-Фараби 75</p>
    <p><b tkey="phone">Телефон:</b> 8(707) 787-76-76</p>
    <p><b tkey="fax">Факс:</b> 8(707) 787-76-76</p>
    <p><b>Жөнелту:</b></p>

    <form action="contact-body.php" methot="POST">
    	<textarea name="mailpost" cols="30" rows="10"></textarea>
    	<input type="submit" name="btnpost">
    </form>

</div>

<?php



include("footer.php");

?>



</body>

</html>