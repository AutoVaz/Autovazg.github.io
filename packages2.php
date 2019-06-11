<!DOCTYPE html>
<html lang="ru">

<?php

include("head.php");

?>
<style>
	.cen {
		text-align: center;
	}
	.test {
		width: 200px;
		border-radius: 10px;
		border: 1px solid black;
		display: inline-block;
		margin: 10px;
		padding: 10px;
		background: white;
	}
	.success {color: green;}
</style>
<body>

<section class="home-page-nav footer-empty">

    <?php

    include("menu.php");

    ?>
<div class="cen">
	<div class="md-3 test">
		<img src="img/testttt.jpg" alt="" width="150" height="150"><br>
		Жаздық
		<div class="success">14 000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/let.png" alt="" width="150" height="150"><br>
		Қыстық
		<div class="success">18 000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/test111.jpg" alt="" width="150" height="150"><br>
		Әрмезгілдік
		<div class="success">25 000<br></div>
	</div><br>
	<div class="md-3 test">
		<img src="img/trebl.jpg" alt="" width="150" height="150"><br>
		Trebl 910746 <br>
		Модель: 53А49А <br>
		Өлшемі: 5.5 х14 <br>
		Тесік \ отверстия: 4 х 100
		<div class="success">60 999<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/disk2.png" alt="" width="150" height="150"><br>
		Bantaj 120713 <br>
		Модель: 531499 <br>
		Өлшемі: 5.5 х14 <br>
		Тесік \ отверстия: 5 х 100
		<div class="success">69 999<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/disk4.jpg" alt="" width="150" height="150"><br>
		Trebl 746910 <br>
		Модель: 49А53А <br>
		Өлшемі: 5.5 х14 <br>
		Тесік \ отверстия: 4 х 100
		<div class="success">49 999<br></div>
	</div>
</div>
</section>

<?php


include("footer.php");

?>


</body>

</html>