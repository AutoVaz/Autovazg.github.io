<?php
    $db_name="autovaz";
    $table_name="autovaz";
    $connect= @mysqli_connect("localhost","root","") or die("Невозможно подключиться к mysql");
    $sql = @mysql_select_db($db_name,$connect) or die ("Невозможно выбрать базу данных");
    $what = $_POST['what'];

    function get_search($link, $table_name, $what) {
        $sql = "SELECT * FROM $table_name WHERE name LIKE '%$what%'";
        $result = mysql_query($sql, $link);
        return $result;
    }

    $result = get_search($connect, $table_name, $what);
?>

<!DOCTYPE html>
<html lang="ru">

<?php

include("head.php");

?>
<style>
    .cen {
        text-align: center;
        margin: 0 auto;
        max-width: 1024px;
    }
    .test {
        width: 200px;
        height: 200px;
        border-radius: 10px;
        border: 1px solid black;
        display: inline-block;
        margin: 10px;
        padding: 10px;
        background: white;
    }

    table {
        border-spacing: 0; 
        border: 1px solid white;   
        margin: 0 auto;
        font-size: 24px;
    }

    td, th {padding: 10px;}
    td {text-align: left;}
</style>
<body>

<section class="home-page-nav footer-empty">

    <?php

    include("menu.php");

    ?>
<div class="cen">
    <table>
        <tr>
            <th>Бөлшек</th>
            <th>Бағасы</th>
        </tr>
    <? while ($main = mysql_fetch_array($result)): ?>
    <tr>
        <td><? echo $main["name"]; ?></td>
        <td><? echo $main["cena"]; ?></td>
    </tr>
    <? endwhile ?>
    </table>
</div>
</section>

<?php


include("footer.php");

?>


</body>

</html>