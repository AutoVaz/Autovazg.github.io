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
		<img src="img/turb.jpg" alt="" width="150" height="150"><br>
		Турбина
		<div class="success">60000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/filt.jpg" alt="" width="150" height="150"><br>
		Ауа фильтрі
		<div class="success">15000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/dat.jpg" alt="" width="150" height="150"><br>
		Турбиналық сенсор
		<div class="success">30000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/rasp.jpg" alt="" width="150" height="150"><br>
		Распоркалар
		<div class="success">25000<br></div>
	</div>
</div>
</section>

<?php


include("footer.php");

?>


</body>

</html>