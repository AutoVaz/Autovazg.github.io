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
		<img src="img/per.jpg" alt="" width="150" height="150"><br>
		Алдыңғы бампер
		<div class="success">25000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/zadn.jpg" alt="" width="150" height="150"><br>
		Артқы бампер
		<div class="success">30000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/bokov.jpg" alt="" width="150" height="150"><br>
		Бүйір бамперлары
		<div class="success">28000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/vetr.jpg" alt="" width="150" height="150"><br>
		Сөрелер
		<div class="success">5000<br></div>
	</div>
</div>
</section>

<?php


include("footer.php");

?>


</body>

</html>