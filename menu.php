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
                        <?php
    if($_COOKIE['side'] == 'light') {
        echo '<li class="logo_menu"><a href="#"onclick="compteclick()"><img src="img/logo60.png" /></a></li>';
    }
    elseif($_COOKIE['side'] == 'dark') {
        echo '<li class="logo_menu"><a href="#"onclick="compteclick()"><img src="img/logo260.png" /></a></li>';
    }
    ?>
						
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?#what">MSGU</a></li>
                        <li><a href="index.php?#me">Moi et le MSGU</a></li>
                        <li><a href="index.php?#info">Pour en savoir plus</a></li>
                        <li><a href="index.php?#play2">Le Jeu</a></li>
                        <li><a href="credits.php">Crédits</a></li>
                    </ul>
                </div>
            </div>
        </nav>