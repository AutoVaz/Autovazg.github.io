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
		<img src="img/shell.jpg" alt="" width="150" height="150"><br>
		Shell
		<div class="success">6000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/mobil.jpg" alt="" width="120" height="150"><br>
		Mobil
		<div class="success">6000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/helix.jpg" alt="" width="150" height="150"><br>
		Helix
		<div class="success">4000<br></div>
		<!-- <a class="btn-ens-action btn-ens-style" data-rel="37dac6ab125525">Купить</a> -->
	</div><br>
	<div class="md-3 test">
		<img src="img/zic.jpg" alt="" width="150" height="150"><br>
		Zic
		<div class="success">3500<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/liqui.jpg" alt="" width="150" height="150"><br>
		Liqui-Moly
		<div class="success">4500<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/total.jpg" alt="" width="150" height="150"><br>
		Total
		<div class="success">3000<br></div>
	</div>


</div>
</section>

<?php


include("footer.php");

?>


</body>


</html>