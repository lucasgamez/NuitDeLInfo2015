<!--

Heavenward Template

AUTHOR
http://templatebaker.com/

LICENSE
http://templatebaker.com/license/

CREDITS
https://unsplash.com/

SUPPORT
info@templatebaker.com

-->
<?php
if(isset($_GET['side'])) {
    if($_GET['side'] == 'light') {
        setcookie('side', 'light', time() + 365*24*3600, null, null, false, true);
        $_COOKIE['side'] = 'light';
    }
    elseif($_GET['side'] == 'dark') {
        setcookie('side', 'dark', time() + 365*24*3600, null, null, false, true);
        $_COOKIE['side'] = 'dark';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuit de l'info 2015</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link href="css/templatebaker.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
    if($_COOKIE['side'] == 'light') {
        echo '<link rel="stylesheet" href="css/light.css">';
    }
    elseif($_COOKIE['side'] == 'dark') {
        echo '<link rel="stylesheet" href="css/dark.css">';
    }
    else {
        echo '<link rel="stylesheet" href="css/neutral.css">';
    }
    ?>
</head>
<body>
<?php
$filename = "menu.php";
if (file_exists($filename)) include($filename);
?>
        

<div id="tb-imagebg"></div>
<div class="tb-content">
    <div class="container">
       <div class="row" style="text-align:center;">
    <div class="col-xs-4">
        <a href="?side=light"><img class="img_light" src="img/sabre_light.png" /></a>
    </div>
    <div class="col-xs-4">
        <h1>Ma bite.</h1></div>
    <div class="col-xs-4">
        <a href="?side=dark"><img class="img_dark" src="img/sabre_dark.png" /></a>
    </div>
</div>
            
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">
                
                <span class="tb-underline-white"> </span>
                <h3>LE site de référence en gestion d'urgence</h3>
                <a href="?#what" class="btn tb-btn-bbg">Qu'est-ce que le MSGU ?</a>
            </div>
        </div>
            
    </div>
</div>
<div class="tb-content-bg" id="what">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>MSGU</h2>
                <span class="tb-underline-white"> </span>
                <div class="row">
                    <div class="col-md-4">
                        <h3> Qu'est-ce que le MSGU ? </h3>
                        <p>C'est utiliser les médias sociaux pour aider les gens en cas d'urgence.</p>
                    </div>
                    <div class="col-md-4">
                        <h3> Comment ça marche ? </h3>
                        <p>
Sais tu que de nombreuse personnes regardent ce que les gens écrivent sur les réseaux sociaux ? Ces personnes cherchent des informations utiles quand un événement grave se produit.
En envoyant un message au bon endroit, on peut informer ces personnes qui vont ensuite s'organiser pour venir en aide aux personnes en danger.</p>
                    </div>
                    <div class="col-md-4">
                        <h3> Pourquoi utiliser les réseaux sociaux ? </h3>
                        <p>Aujourd'hui, tout le monde utilise les réseaux sociaux. Grâce a eux, on peut facilement et rapidement s'informer.</p>
                    </div>
                </div>
                
                <a href="#" class="btn tb-btn-bb">Learn More</a>
            </div>
        </div>
    </div>
</div>
<div class="tb-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/logo500x500.png">
            </div>
            <div class="col-md-6">
                <h3 class="bulle"> Bonjour, je suis GoodSlam, le justicier intergalactique </h3>
            </div>
        </div>
    </div>
</div>
<div class="tb-content-bg" id="me">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Moi et le MSGU</h2>
                <span class="tb-underline-white"> </span>
                <div class="row">
                    <div class="col-md-4">
                        <p>Grâce aux MSGU, tu auras les informations pour te préparer à affronter des situations d’urgences, mais aussi tu sauras quoi faire pendant ces situations en adoptant les gestes de sécurité.</p>
                    </div>
                    <div class="col-md-4">
                        <p>
Toi aussi tu peux aider les gens. Ce n’est pas compliqué : il suffit de prendre une photo ou  de poster un commentaire sur les réseaux sociaux avec tes parents. Ainsi tu informeras les autres internautes de la situation en temps réelle mais surtout les secours pourront mieux intervenir sur le terrain.</p>
                    </div>
                    <div class="col-md-4">
                        <p>En tant que citoyen, tu seras capable d’aider tes amis, ta famille, tes camarades mais surtout tous ceux qui seront près de toi : tu deviendras un héros !</p>
                    </div>
                </div>
                <a href="#" class="btn tb-btn-bb">Learn More</a>
            </div>
        </div>
    </div>
</div>
<div class="tb-content img-side">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
<?php
if($_COOKIE['side'] == 'light') {
        echo '<img src="img/yoda.png" alt="" />';
    }
    elseif($_COOKIE['side'] == 'dark') {
        echo '<img src="img/darkvador.png" alt="" />';
    }
    else {
        echo '<img src="" alt="" />';
    }
?>
            </div>
        </div>
    </div>
</div>
<div class="tb-content-bg" id="play">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Les Jeux</h2>
                <span class="tb-underline-white"> </span>
                <h3>make a type specimen book</h3>
                <div class="tb-steps">
                    <div class="tb-steps-row">
                        <div class="tb-step-body">
                            <a href="#" class="btn tb-btn-steps">1</a>
                        </div>
                        <div class="tb-step-body">
                            <a href="#" class="btn tb-btn-steps">2</a>
                        </div>
                        <div class="tb-step-body">
                            <a href="#" class="btn tb-btn-steps">3</a>
                        </div>
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <a href="#" class="btn tb-btn-bb">Learn More</a>
            </div>
        </div>
    </div>
</div>
<div class="tb-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center tb-footer">
                <ul class="list-inline" style="color:black;">
                    <li>&copy; heavenward Remix by Champo-Team (Nous quoi)</li>
                    <li>|</li>
                    <li class="tb-copyright">Proudly created by: <a target="_blank" rel="nofollow" href="http://www.templatebaker.com">TemplateBaker</a></li><br /><br /><br /> <!-- Oui, je sais, c'est sale... -->
                    <li><img src="img/nuitinfo_2015.png"></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script>
clics = 0; 
	
function compteclick() {
	clics ++ ;
	if(clics == 10){
		window.open("EASTEREGGstarwars/index.html");
		clics = 0;
	}
}
</script>
</body>
</html>