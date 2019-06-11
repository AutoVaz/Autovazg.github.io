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
		<img src="img/sim.jpg" alt="" width="150" height="150"><br>
		Сымдар
		<div class="success">1200тг\м<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/svechi.jpg" alt="" width="150" height="150"><br>
		От ұштары
		<div class="success">500+<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/lampa.jpg" alt="" width="150" height="150"><br>
		Шамдар
		<div class="success">150+<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/pred.jpg" alt="" width="150" height="150"><br>
		Сақтандырғыштар
		<div class="success">100+<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/block.jpg" alt="" width="150" height="150"><br>
		Блоктар
		<div class="success">3500<br></div>
	</div>
</div>
</section>

<?php


include("footer.php");

?>


</body>

</html>