<?php
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    $components = explode('/', $path);
    $first_part = $components[1];
?>

<div class="container">
        <div class="navbar navbar-default">
            <div class="row">
                <div class="collapse navbar-collapse" id="responsive-menu">

                    <!-- /container -->
                    <div class="nav-home">
                        <ul class="nav navbar-nav">
                            <li><img src="img/logo11.jpg" alt="Логотип" title="Логотип" width="62" height="62"></li>
                            <li class="<?php if ($first_part=="" || $first_part=="index.php") {echo "active"; }?>">
                                <a href="index.php">Басты бет</a>
                            </li>
                            <li class="<?php if ($first_part=="packages.php") {echo "active"; }?>"><a href="packages.php">Каталог</a></li>
                            <li class="<?php if ($first_part=="routes.php") {echo "active"; }?>"><a href="routes.php">Компания туралы</a></li>
                            <li class="<?php if ($first_part=="contacts.php") {echo "active"; }?>"><a href="contacts.php">Байланыс</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>