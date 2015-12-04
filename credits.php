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
    ?>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="logo_menu"><a href="#"onclick="compteclick()"><img src="img/logo60.png" /></a></li>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?#what">Qu'est-ce que le MSGU ?</a></li>
                        <li><a href="index.php?#me">Moi et le MSGU</a></li>
                        <li><a href="index.php?#play">Les Jeux</a></li>
                        <li><a href="credits.php">Crédits</a></li>
                    </ul>
                </div>
            </div>
        </nav>

<div id="tb-imagebg"></div>
<div class="tb-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">
                <h1>Crédits</h1>
                <span class="tb-underline-white"> </span>
                <h3>Car il est important de rendre à César ce qui est à César.</h3>
            </div>
        </div>
    </div>
</div>
<div class="tb-content-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>L'équipe DDL : Les Développeurs de l'Extrême</h2>
                <span class="tb-underline-white"> </span>
                <h3>Des L3 Info' ayant fait le déplacement depuis Albi !</h3>
                <p>(Qui démontre notre énorme motivation : tremblez !)</p>
                <a href="http://www.univ-jfc.fr/" target="_blank" class="btn tb-btn-bb">Centre Universitaire Jean-François Champollion</a>
                <div class="row">
                    <div class="col-lg-4">
                        
                    </div>
                    <div class="col-lg-4">
                        <ul style="text-align:left; font-size:20px;">
                           <li>Mehdi Slamnia Hé!hé!</li>
                           <li>Chilan-Eli Y-manque-du(uk)sel</li>
                           <li>Lucas Ga-Metz</li>
                           <li>Victor P(as)-inquiet</li>
                           <li>Quentin "JK" Lacoste "Crocodile"</li>
                           <li>Mehdi Dje<strike>mai</strike>di</li>
                           <li>JB Cu(eil)lié(z)</li>
                           <li>Léa Froment-Mazet(ltov)</li>
                           <li>Jérémie "Gach"-(b)elin</li>
                       </ul>
                    </div>
                    <div class="col-lg-4">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tb-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2>Les ressources du web</h2>
                <a href="http://perdu.com/" target="_blank" class="btn tb-btn-bbg">Ceci n'est pas un lien</a>
            </div>
        </div>
    </div>
</div>
<div class="tb-content-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Car cela ne sert à rien...</h2>
                <span class="tb-underline-white"> </span>
                <h3>... de réinventer la roue !</h3>
                <div class="tb-steps">
                    <div class="tb-steps-row">
                        <div class="tb-step-body">
                            <a href="#" class="btn tb-btn-steps">1</a>
                        </div>
                    </div>
                </div>
                <h3>Le template</h3>
                <p>Merci au site <a href="http://templatebaker.com/">Template Baker</a> dont les templates sont sous licence <a href="https://creativecommons.org/licenses/by/4.0/deed.fr">CC BY 4.0</a> pour le template "Heavenward".</p>
                <div class="tb-steps">
                    <div class="tb-steps-row">
                        <div class="tb-step-body">
                            <a href="#" class="btn tb-btn-steps">2</a>
                        </div>
                    </div>
                </div>
                <h3>Les images</h3>
                <p>Ce <a href="https://www.nasa.gov/images/content/440647main_STScI-2006-14-full_full.jpg ">fond d'écran géniallisime</a> est généreusement fourni par la NASA, dont les images ne possèdent en général pas de copyright, comme l'indique sa <a href="https://www.nasa.gov/multimedia/guidelines/index.html">politique d'usage des médias</a>.</p>
                <div class="tb-steps">
                    <div class="tb-steps-row">
                        <div class="tb-step-body">
                            <a href="#" class="btn tb-btn-steps">3</a>
                        </div>
                    </div>
                </div>
                <h3>Le contenu</h3>
                <p>Après de nombreux redécoupage d'informations de part et d'autre, c'est finalement notre imagination débordante qui a pris le dessus sur le contenu fourni sur ce site. Ne soyez pas envieux, on vous l'offre !</p>
            </div>
        </div>
    </div>
</div>
<div class="tb-content  img-side">
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
</body>
</html>