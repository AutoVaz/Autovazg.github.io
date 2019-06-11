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
		<img src="img/chehol.jpg" alt="" width="150" height="150"><br>
		Чехол
		<div class="success">2500<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/kolonka.jpg" alt="" width="150" height="150"><br>
		Динамиктер
		<div class="success">7000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/led.jpg" alt="" width="150" height="150"><br>
		Лампалар
		<div class="success">2500<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/diod.jpg" alt="" width="150" height="150"><br>
		Диодтар
		<div class="success">1500<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/pioneer.jpg" alt="" width="150" height="150"><br>
		Магнитофон
		<div class="success">29 000<br></div>
	</div>
</div>
</section>

<?php


include("footer.php");

?>


</body>

</html>