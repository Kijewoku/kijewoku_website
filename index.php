<!DOCTYPE html>
<html lang="fr">
<head>
    <?php $title_page = "Création de jeux-vidéo indé"; ?>
    <meta charset="UTF-8">
    <meta name="description" content="Kijewoku est un site regroupant mes divers créations de jeux-vidéos indépendants. Des jeux tournant autour de divers thèmes comme la science-fiction, le fantastique. Les jeux sont en 2D jouables sur PC et/ou Android. Vous pouvez jouer gratuitement et même proposer votre aide sur un projet si le coeur vous en dit.">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Kijewoku - <?php echo $title_page; ?></title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/primetime-font.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/responsive.css">
    <!-- favicon -->
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body id="home">
    
    <header>
        <!-- bouton refresh -->
        <i class="fa fa-refresh fa-2x" aria-hidden="true"></i>
        <!-- logo du site -->
        <div class="logo animated rubberBand"></div>
        <h2 class="animated fadeIn"><?php echo $title_page; ?></h2>
        <!-- bouton 'descendre' -->
        <i id="go-down" class="fa fa-arrow-down fa-2x animated bounce" aria-hidden="true">
            <div class="btn-circle-level1"></div>
            <div class="btn-circle-level2"></div>
            <div class="btn-circle-level3"></div>
        </i>
        <!-- mascotte du Kijewoku -->
        <div class="mascot-opacity">
            <div class="mascot animated fadeIn"></div>
        </div>
        <!-- pente n°1 -->
        <div class="slope1"></div>
    </header>
    
    <nav>
        <ul>
            <li><a href="#home">Accueil</a></li> -
            <li><a href="#about">À propos</a></li> -
            <li><a href="#game">Jeux</a></li> -
            <li><a href="#contact">Contact</a></li> -
            <li><a href="https://www.facebook.com/kijewokugame/" target="_blank" class="fa fa-facebook-official"></a></li>
            <li><a href="https://www.youtube.com/channel/UC7Tg_P_sLypXk5zOVZTxH3w" target="_blank" class="fa fa-twitter"></a></li>
            <li><a href="https://twitter.com/kijewoku" target="_blank" class="fa fa-youtube-play"></a></li>
        </ul>
    </nav>
    
    <!-- ==============================| CONTENUE |============================== -->
    
    <section class="about">
        <h2 id="about">à propos</h2>
        <p>Bienvenue sur le site de <strong>Kijewoku</strong>. Ce site a pour but de rassembler l’ensemble de mes créations perso de <strong>jeux-vidéo</strong> mais aussi des projets fait en équipe. Les premiers projets mis en route sont créés avec les logiciels <a href="http://www.rpgmakerweb.com/" target="_blank">RPG Maker de Enterbrain</a> mais aussi avec <a href="http://www.clickteam.com/fr/clickteam-fusion-2-5" target="_blank">Fusion 2.5 de Clickteam</a>. À l’avenir les prochains projets seront codés sur des moteurs tels que <strong>Unity</strong> ou encore avec des bibliothèques comme <strong>Phaser</strong>.</p>
        
        <h2 id="game">jeux</h2>
        
        <div class="game-logo-ki"></div>
        <h3>Kipatord - Le mal s'emballe</h3>
        <p>Le monde des dieux est tombé entre les mains d’une sombre Déesse répondant au nom de Serxe. Elle donne naissance à d’immondes hordes de démons qui, à leur tour, engendrerons le mal partout dans l’univers. Mais un autre dieu, rival de Serxe depuis toujours, créé une planète bien cachée afin de donner naissance à une armée de demi-dieux dans l’espoir d’éradiquer la menace.</p>
        <p>Au commencement, il n’y avait que l’Ouroxe, une énergie pensante et unique. Mais cette conscience finit par se faire exploser en un millier de morceaux et ainsi le monde est né. L’Ouroxe s’éparpilla en toute part de ce monde sans en avoir le souvenir. Ainsi l’individualisme naquis. Elle était le monde, mais sans rien en savoir. Ceci réglait définitivement le problème de l’ennui. Mais l’Ouroxe était loin de se douter que l’individualisme finirait par en être un aussi ! La quantité d’Ouroxe libérée permis la création d’une gigantesque et unique planète nommée Kipatord. Une étoile bouillonnante tournait autour, offrant à Kipatord, lumière et chaleur. Les créatures qui y vivaient étaient d’une grande variété, mais les plus puissantes de toutes étaient sans équivoques : les dieux. Cependant, l’avenir de l’univers réserve bien des suprises, même à des créatures aussi puissantes que les dieux.</p>
        
        <button class="button"><a href="construction.php" target="_blank">Accéder au site </a></button>
        
        <!-- pente n°2 -->
        <div class="slope2"></div>
    </section>
    
    <div class="back">
        <div class="back-game-ki"></div>
    </div>
    
    <section class="dark-section">
        <!-- pente n°3 -->
        <div class="slope3"></div>
        
        <div class="game-logo-lb"></div>
        <h3>LE BONHOMME - LA MENACE AKKAROULDE</h3>
        <p>Un univers de <strong>science-fiction</strong> où il ne reste plus qu’un seul humain dans tout l’univers. Il décide alors de se cloner afin de pouvoir bâtir un nouvel empire, mais bon nombre de dangers les attendent dans la galaxie d’Évéréxia, notamment les Akkarouldes.</p>
        <p>Dans un lointain futur, la terre fut anéantie par un trou noir. Un seul vaisseau put s’échapper jusqu’à une autre galaxie, décidant de fuir le plus loin possible de cet objet destructeur. Malheureusement, son équipage est dans l’incapacité de se reproduire. Au cours du voyage, la faim et la maladie les entrainent tous vers la mort. C’est alors que le dernier survivant se retrouve contraint d’être cloné pour la survie de l’espèce. Un nouvel équipage était né. Et malgré leur identité commune, un seul héros saura se dresser contre la menace naissante que sont les Akkarouldes : C’est <strong>LE Bonhomme !</strong></p>
        
        <button class="button"><a href="construction.php" target="_blank">Accéder au site </a></button>
        
        <!-- pente n°2 -->
        <div class="slope2"></div>
    </section>
    
    <div class="back">
        <div class="back-game-lb"></div>
    </div>
    
    <section>
        <!-- pente n°3 -->
        <div class="slope3"></div>
        
        <h3>E.N.I.</h3>
        <p>Un troisième projet, qui est légèrement en arrière-plan mais qui finalement avance assez bien : « E.N.I – Ennemis Non Identifiés » est un jeu plutôt court mais qui mettra en scène un monde où toutes les théories du complot existent réellement en même temps et dont l’impact est bien visible ! Trois héros, un Pépé retraité et ancien champion de box, un jeune et beau vampire et un flic ordinaire vont tenter d’en finir avec tout ce foutoir.</p>
        <p>Avez-vous déjà entendu parler de la théorie du complot ? Le nouvel ordre mondial ? Les aliens ? Les reptiliens ? Ou encore une intelligence artificielle nous simulant dans un enfer virtuel pour nous punir de ne pas l’avoir créé assez tôt ?! Alors peut être serez vous curieux de savoir à quoi ressemblerait un monde où toutes ces histoires sont vraies. E.N.I est un de ces mondes. Et pour nos trois héros, Fred, Èdy et Julian ce n’est pas la fête tout les jours. En fait, c’est même carrément le merdier, et ils auraient bien besoin d’un coup de pouce pour en finir avec toutes ces conneries !</p>
        
        <button class="button"><a href="construction.php" target="_blank">Accéder au site </a></button>
        
        <!-- pente n°2 -->
        <div class="slope2"></div>
    </section>
    
    <div class="back">
        <div class="back-game-eni"></div>
    </div>
    
    <section>
        <!-- pente n°3 -->
        <div class="slope3"></div>
        
        <h2 id="contact" >Contact - Contribution</h2>
        
        <p>Envie d'apporter une idée à un de ces projets ? Une aide quelconque : son, graphisme, talent de programmeur ? N'hésite pas à m'envoyer un p'tit message avec le formulaire ci-dessous !</p>
        
        <p>Il peut aussi s'agir d'un rapport de bug suite au test d'un jeu. Dans tous les cas, tu peux me laisser ton nom, prénom, pseudo où tout autre info que tu désires voir apparaître dans les crédits du jeu en question.</p>
        
        <form class="form" id="form1" method="post" action="send.php">
            <p class="name">
                <input name="name" type="text" class="feedback-input" placeholder="Nom" id="name" />
            </p>
            <p class="email">
                <input name="email" type="text" class="feedback-input" id="email" placeholder="Email" />
            </p>
            <p class="text">
                <textarea name="message" class="feedback-input" id="comment" placeholder="Votre message"></textarea>
            </p>
            <div class="submit">
                <input type="submit" value="ENVOYER" id="button-blue" class="center-block"/>
            </div>
        </form>
        
        <!-- pente n°2 -->
        <div class="slope2"></div>
    </section>
    
    <!-- ============================| END CONTENUE |============================ -->
    <footer>
        <div class="license">
                <h3>Licence Creative Commons</h3>
                <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png" /></a>
                <br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Kijewoku</span> de <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.julienmalle.fr/" property="cc:attributionName" rel="cc:attributionURL" target="_blank">Julien Malle</a> est mis à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank">licence Creative Commons Attribution - Pas d&#39;Utilisation Commerciale - Pas de Modification 4.0 International</a>.
            </div>
            <div class="social">
                <h3>Kije' sur les réseaux sociaux</h3>
                <div>
                    <a href="https://www.facebook.com/kijewokugame/" target="_blank" class="social social-facebook"></a>
                    <a href="https://www.youtube.com/channel/UC7Tg_P_sLypXk5zOVZTxH3w" target="_blank" class="social social-youtube"></a>
                    <a href="https://twitter.com/kijewoku" target="_blank" class="social social-twitter"></a>
                </div>
            </div>
    </footer>

</body>
</html>