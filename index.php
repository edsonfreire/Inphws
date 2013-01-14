<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inphws</title>
        <meta charset=utf-8>
        <meta name="description" content="Informatica Website and Identificacao Visual and Desenvolvimento Grafico and Google Maps" />
        <meta name="keywords" content="iphws, rede, manutencao, desenvolvimento, projeto, website, logo, google maps, cartoes, cameras"/>
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
    </head>
    <?php
    include 'container.php';
    ?>
    <body>
        <div id="map"></div>
        <div id="bf_container" class="bf_container">
            <div id="bf_background" class="bf_background">
                <img src="images/background/default.jpg" alt="" style="display:none;"/>
                <div class="bf_overlay"></div>
            </div><!--background page-->
            <div id="bf_page_menu" class="bf_menu" >
                <?php
                include 'menu.php';
                ?>
            </div><!--menu-->
            
            <div class="bf_page" id="quemSomos" style="display:block;">
                <?php
                include 'quemSomos.php';
                ?>
            </div><!--home-->
            <div class="bf_page" id="contato">
                <?php
                include 'contato.php';
                ?>
            </div><!--quemsomos-->
            <div class="bf_page" id="portfolio">
                <?php
                include 'portfolio.php';
                ?>
            </div><!--portfolio-->
        </div>
        <div class="bf_footer">
            <a class="bf_left" href="http://www.inphws.com.br">&copy; <?php
                $data = date("Y");
                echo $data;
                ?> - Todos os direitos reservados - Inphws Technology Solutions</a>
        </div>
    </body>
</html>