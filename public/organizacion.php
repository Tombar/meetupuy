<?php
    $title = "Organizan";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require_once 'include/head_meta.inc.php'; ?>
    </head>

    <body>

        <?php require_once 'include/navbar.inc.php'; ?>

        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1>Organización</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    <div class="span12">
                        <h2 class="txt-middle">El equipo</h2>
                        <hr class="dashed">
                    </div>
                </div>
                <div class="row">
                    <div class="span9 offset130px" >
                        <ul class="thumbnails" >
                            <li class="span3">
                                <div class="thumbnail" id="team">
                                    <img alt="" src="/img/organizacion/martin_loy.jpg">
                                    <div class="caption">
                                        <h4>Martín Loy</h4>
                                        <div class="social">
                                            <ul class="unstyled">
                                                <li><a href="http://twitter.com/MartinLoy" class="twitter"><i class="icon-twitter-sign"></i></a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail" id="team">
                                    <img alt="" src="/img/organizacion/nacho_nin.jpg">
                                    <div class="caption">
                                        <h4>Ignacio Nin</h4>
                                        <div class="social">
                                            <ul class="unstyled">
                                                <li>
                                                    <a class="twitter" href="http://twitter.com/NachexNachex"  target="_blank"><i class="icon-twitter-sign"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail" id="team">
                                    <img alt="" src="/img/organizacion/diego_sapriza.jpg">
                                    <div class="caption">
                                        <h4>Diego Sapriza</h4>
                                        <div class="social">
                                            <ul class="unstyled">
                                                <li>
                                                    <a class="twitter" href="http://twitter.com/AV4TAr"  target="_blank"><i class="icon-twitter-sign"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail" id="team">
                                    <img alt="" src="/img/organizacion/martinc.jpg">
                                    <div class="caption">
                                        <h4>Martín Cabrera</h4>
                                        <div class="social">
                                            <ul class="unstyled">
                                                <li>
                                                    <a class="twitter" href="http://twitter.com/murtun" target="_blank"><i class="icon-twitter-sign"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail" id="team">
                                    <img alt="" src="/img/organizacion/nicolasb.jpg">
                                    <div class="caption">
                                        <h4>Nicolás Bianchi</h4>
                                        <div class="social">
                                            <ul class="unstyled">
                                                <li>
                                                    <a class="twitter" href="http://twitter.com/nicobf" target="_blank"><i class="icon-twitter-sign"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="row">
                    <div class="span12">
                        <h2 class="txt-middle">Nos apoyan en la organización</h2>
                        <hr class="dashed">
                    </div>
                </div>
                <div class="row">
                    <div class="span8 offset3">
                        <ul class="thumbnails">
                            <li class="span2">
                                <a class="thumbnails" href="https://twitter.com/alepamparato" target="_blank"><img class="img-rounded" alt="Pampa" src="/img/apoyan/pampa.jpg"></a>
                                <div class="caption">
                                    <h3>Pampa</h3>
                                </div>
                            </li>

                            <li class="span2">
                                <a class="thumbnails" href="https://twitter.com/soygero" target="_blank"><img class="img-rounded" alt="Gero" src="/img/apoyan/gero.jpg"></a>
                                <div class="caption">
                                    <h3>Gero</h3>
                                </div>
                            </li>
                            <li class="span2">
                                <a class="thumbnails" href="https://twitter.com/taguerre" target="_blank"><img class="img-rounded" alt="Teresa" src="/img/apoyan/teresa.jpg"></a>
                                <div class="caption">
                                    <h3>Teresa</h3>
                                </div>
                            </li>
                            <!--
                            <li class="span2">
                                <a class="thumbnails" href="mailto:info@meetup.uy"><img class="img-rounded" alt="" src="http://placehold.it/160x160&text=¡Apoyá!"></a>
                            </li>
                            -->
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <?php require_once 'include/footer.inc.php'; ?>

        <?php require_once 'include/js.inc.php'; ?>

    </body>
</html>
