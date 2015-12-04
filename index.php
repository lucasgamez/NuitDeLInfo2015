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
if(!isset($_COOKIE['side'])) {
    setcookie('side', 'light', time() + 365*24*3600, null, null, false, true);
    $_COOKIE['side'] = 'light';
}

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
    <title>MSGU Junior</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link href="css/templatebaker.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
     <?php
    if($_COOKIE['side'] == 'light') {
        echo '<link rel="icon" type="image/png" href="img/light_icon.png" />';
    }
    elseif($_COOKIE['side'] == 'dark') {
        echo '<link rel="icon" type="image/png" href="img/mchant_icon.png" />';
    }
    ?>
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
    ?>
</head>
<body>
<?php
$filename = "menu.php";
if (file_exists($filename)) include($filename);
?>
       
<!-- Le guide intergalactique -->
<div id="follow_guide">
   <?php
    if($_COOKIE['side'] == 'light') {
        echo '<img src="img/logo140.png" alt="Le guide" />';
    }
    elseif($_COOKIE['side'] == 'dark') {
        echo '<img src="img/mchant140.png" alt="Le guide" />';
    }
    ?>
    
</div>
        

<div id="tb-imagebg"></div>
<div class="tb-content">
    <div class="container">
       <div class="row" style="text-align:center;">
    <div class="col-xs-4">
        <a href="?side=light"><img class="img_light" src="img/sabre_light.png" /></a>
    </div>
    <div class="col-xs-4">
        <h1>MSGU Junior</h1></div>
    <div class="col-xs-4">
        <a href="?side=dark"><img class="img_dark" src="img/sabre_dark.png" /></a>
    </div>
</div>
            
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">
                
                <span class="tb-underline-white"> </span>
                <h3>LE site de référence en gestion d'urgence</h3>
                <a href="#what" class="btn tb-btn-bbg">MSGU</a>
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
                
            </div>
        </div>
    </div>
</div>
<div class="tb-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/<?php if($_COOKIE['side'] == 'light') {?>logo500x500.png <?php } else {?>mchant500x500.png <?php }?>">
            </div>
            <div class="col-md-6">
                <h3 class="bulle"> Bonjour, je suis <?php if($_COOKIE['side'] == 'light') {?>GoodSlam, le justicier intergalactique<?php } else {?>BadSlam, le vilain de la galaxie<?php }?>  </h3>
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
<div class="tb-content-bg" id="info">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Pour en savoir plus</h2>
                <span class="tb-underline-white"> </span>
                
                 <div class="col-lg-12 text-center">
                      <p>Pendant une situation de crise, la circulation de l’information est très important pour pouvoir bien gérer les événements. En plus de la radio et de la télévision, les médias sociaux comme facebook ou twitter rendent plus rapide cette circulation de l’information entre les services de l’État et les citoyens.</p>
<p>Aujourd’hui, lors d’un accident d’origine naturelle ou provoqué par l’homme, ou tout incident faisant que les forces de sécurité interviennent, chaque citoyen comme toi, tes amis et ta famille est en mesure de créer, de relayer et d’amplifier les informations qui circulent sur internet. Malheureusement, des personnes mal intentionnées auront accès à ces informations, ils pourront altérer la gestion de la crise, retarder voire empêcher le bon déploiement des équipes de secours et faire courir des risques supplémentaires aux citoyens et intervenants.</p>
 
<h3>Médias Sociaux pour la Gestion des Urgences : les réflexes citoyens !</h3>
<p>Informe-toi en temps réel et fais un tri dans ce qui circule sur les médias sociaux.
Reste responsable, diffuse et relaye des informations officielles ou fiables, utiles et non dangereuses pour les victimes, intervenants et sauveteurs
Joue ton rôle de citoyen, aide les acteurs des secours en leur donnant des informations du terrain.</p> 
                     <h3>Être informé, avant la catastrophe</h3>
 <p>Accéde à des informations vérifiées. On te recommande de suivre les comptes officiels de l’État sur Twitter et Facebook. Ce sont des sources officielles, qui diffusent des informations validées et les consignes de sécurité à adopter. N’hésite pas à relayer leurs messages préventifs. Sur ces comptes, l’information aura été vérifiée. Même si elle est publiée plus tardivement que sur d’autres comptes, elle sera plus fiable .Avec tes parents tu peux suivre ces comptes :</p>
                   
<ul>                       
    <li><p> Les services de proximité : préfecture de votre département @prefXX – Sapeurs-pompiers (SDIS) ;</p> </li>
    <li> <p> Les services du ministère de l’Intérieur : @Gendarmerie - @PNationale - @Place Beauvau - @prefpolice ;</p> </li>
    <li> <p> Les comptes des ministères  et de @gouvernementFR ;</p> </li>
    <li> <p> Les comptes des partenaires de l’État et des principales institutions, associations et organisations non gouvernementales fiables : votre mairie, votre département, la Croix Rouge locale, VISOV: Volontaires internationaux en soutien opérationnel virtuel.;</p> </li>
</ul>
                    
<h3>Agir de façon responsable, pendant la crise</h3>
<p>Chasse la rumeur ! Relaye uniquement les messages validés, tu es sûr, provenant de comptes que tu connais et dans lesquels tu as confiance. Évite les rumeurs. La diffusion d’informations non confirmées et inexactes ralenti le déploiement des secours et met des vies en danger. Le fait de vérifier tes sources aide les services de secours dans leurs missions.</p>
<p>Évite d’utiliser ton téléphone portable pour des appels ou la transmission de SMS, et préfères les réseaux filaires pour téléphoner ou transmettre des messages par mail ou sur les réseaux sociaux pour prévenir tes proches et les rassurer. Ainsi, tu laisses les réseaux de téléphonie portable libres pour les appels d’urgence. Si tu détectes une personne en difficulté ou une situation d’urgence, appelle vite le 18 ou le 112, afin de prévenir les secours et d’engager leurs interventions.</p>
<p>Des fois, il arrive aussi qu’il y est d’autres numéros de téléphone à appeler en priorité. Suis alors les instructions données, et diffuses-les.</p>
<p>Si c’est une attaque terroriste, ne tentes surtout rien et appelles le 17.</p>
                     
<h3>Être citoyen et renforcer l’action de l’État au service des sinistrés</h3>
<p>Lorsque tu es en sécurité, dis sur les réseaux sociaux tout ce qui peut aider les secours. Une route bloquée, un poteau électrique qui tombe, un bâtiment qui menace de s’effondrer, sont autant d’informations qui, une fois connues des services de secours, les aide à agir efficacement et de façon ciblée. Attention ne te met pas en danger pour aller prendre une photo. Tu dois avant tout temettre à l’abri, pas de poster une image sur un réseau social !</p>
<p>Parmi les acteurs de cette citoyenneté, VISOV (Volontaires internationaux en soutien opérationnel virtuel) est une association qui aide pour l’organisation de gestion de crise. Elle récupère les informations disponibles sur les réseaux sociaux, les partage très vite à beaucoup de personnes afin de soutenir les populations sinistrées, et les rend utiles pour les autorités. L’association apporte également une assistance aux sinistrés, dicte des consignes à la population et .plein d’autre truc via les médias sociaux.</p>
<p>Elle est composée de gens qui veulent aider bénévolement de secouristes, sapeurs-pompiers …</p>
                </div>
               
                
            </div>
        </div>
    </div>
</div>
<div class="tb-content img-side">
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