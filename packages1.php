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
		height: 250px;
		border-radius: 10px;
		border: 1px solid black;
		display: inline-block;
		margin: 10px;
		padding: 10px;
		background: white;
	}

	.success {color: green}
</style>
<body>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script defer src="https://lk.easynetshop.ru/frontend/v5/ens-37dac6ab.js"></script>
<link href="https://lk.easynetshop.ru/frontend/v5/ens-37dac6ab.css" rel="stylesheet">

<section class="home-page-nav footer-empty">

    <?php

    include("menu.php");

    ?>
<div class="cen">
	<div class="md-3 test">
		<img src="img/stoik.jpg" alt="" width="150" height="150"><br>
		Алдыңғы амортизаторлар
		<div class="success">6 000<br></div>

	</div>
	<div class="md-3 test">
		<img src="img/rule.jpg" alt="" width="150" height="150"><br>
		Рөлдік рейкалар
		<div class="success">8 000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/kpp.jpeg" alt="" width="150" height="150"><br>
		Беріліс қорабы<a class="btn-ens-action btn-ens-style" data-rel="37dac6ab125525">Купить</a>
		<div class="success">46 000<br></div>
	</div><br>
	<div class="md-3 test">
		<img src="img/stup.jpg" alt="" width="150" height="150"><br>
		Алдыңғы хабтар
		<div class="success">3500<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/tor.jpg" alt="" width="150" height="150"><br>
		Тоқтатқыш қысқыштар
		<div class="success">46 000<br></div>
	</div>


</div>
</section>

<?php


include("footer.php");

?>


</body>


</html>