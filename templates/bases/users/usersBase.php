
<!DOCTYPE html>

<html lang="fr" >

    <head>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $titre_page ?></title>
        <link rel="shortcut icon" href="/GameFolio/public/images/logo_jeuxVideos.png" />
        <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/users/usersBase.css" media="all" />
        <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/users/style_viewHome.css" media="all" />
        <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/users/style_viewLogin.css" media="all" />

    </head>

    <body>

        <header class="header_class">

            <nav class="nav_class">

                <ul class="ul_class">

                    <a href="/GameFolio/home" class="lien_logo_class"><img src="/GameFolio/public/images/logo_jeuxVideos.png" alt="logo" class="logo_class"/></a>
                    <li class="li_class"><a href="/GameFolio/home" class="">ACCUEIL</a></li>
                    <li class="li_class"><a href="/GameFolio/home/games" class="">JEUX VIDEOS</a></li>
                    <li class="li_class"><a href="/GameFolio/home/offres" class="">OFFRES</a></li>
                    <li class="li_class"><a href="/GameFolio/home/infos" class="">NOUS</a></li>
                    <li class="li_class"><a href="/GameFolio/home/boutiques" class="">NOS BOUTIQUES</a></li>
                    <li class="li_class" id="six_id"><a href="/GameFolio/home/contacts" class="">CONTACTS</a></li>
                    <a href="/GameFolio/home/login" class="lien_iconeConnexion_class"><img src="/GameFolio/public/images/icone_connexion.png" alt="logo" class="icone_connexion"/></a>

                </ul>
            </nav>

        </header>

        <main class="main_class">

            <?php echo $content ?>

        </main>


        <footer class="footer_class">

        </footer>

    </body>

    <script type="text/javascript" src=""></script>

</html>






