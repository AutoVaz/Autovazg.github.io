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
		<img src="img/гы.jpg" alt="" width="150" height="150"><br>
		Қуат күшейткіш
		<div class="success">25000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/kol.jpg" alt="" width="150" height="150"><br>
		Колонкалар
		<div class="success">9000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/buffer.jpg" alt="" width="150" height="150"><br>
		Буфер
		<div class="success">50000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/twit.jpg" alt="" width="150" height="150"><br>
		Твитер
		<div class="success">2000<br></div>
	</div>
</div>
</section>

<?php


include("footer.php");

?>


</body>

</html>