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
		<img src="img/foam.jpg" alt="" width="150" height="150"><br>
		Foam Cleaner
		<div class="success">1800<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/tuff.jpg" alt="" width="150" height="150"><br>
		Tuff Stuff
		<div class="success">700<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/marco.jpg" alt="" width="150" height="150"><br>
		Marco
		<div class="success">1500<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/shetka.jpg" alt="" width="150" height="150"><br>
		Щетка
		<div class="success">2500<br></div>
	</div>
	<div class="md-3 test">
		<img src="img/rez.jpg" alt="" width="150" height="150"><br>
		Резиналық сүлгі
		<div class="success">1200<br></div>
	</div>
</div>
</section>

<?php


include("footer.php");

?>


</body>

</html>