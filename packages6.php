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
		<img src="img/lucoil.jpg" alt="" width="150" height="150"><br>
		Лукойл
		<div class="success">4500<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/rosdot.jpg" alt="" width="150" height="150"><br>
		ROSDOT
		<div class="success">5000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/brake.jpg" alt="" width="150" height="150"><br>
		Brake Fluid
		<div class="success">5000<br></div>
	</div><br>
	<div class="md-3 test">
		<img src="img/super.jpg" alt="" width="150" height="150"><br>
		Super Dot 4
		<div class="success">4000<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/motul.jpg" alt="" width="150" height="150"><br>
		Motul
		<div class="success">3800<br></div>
	</div>
</div>
</section>

<?php


include("footer.php");

?>


</body>

</html>