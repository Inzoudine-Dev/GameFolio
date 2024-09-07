
<!DOCTYPE html>

<html lang="fr" >

    <head>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $titre_page ?></title>
        <link rel="shortcut icon" href="/GameFolio/public/images/logo_jeuxVideos.png" />
        <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/users/usersBase.css" media="all" />
        <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/users/viewHome.css" media="all" />

    </head>

    <body>

        <header class="header_class">

            <nav class="nav_class">

                <ul class="ul_class">

                    <a href="/GameFolio/home" class="lien_logo_class"><img src="/GameFolio/public/images/logo_jeuxVideos.png" alt="logo" class="logo_class"/></a>
                    <li class="li_class"><a href="/GameFolio/home" class="">menue 1</a></li>
                    <li class="li_class"><a href="/GameFolio/home" class="">menue 2</a></li>
                    <li class="li_class"><a href="/GameFolio/home" class="">menue 3</a></li>
                    <li class="li_class"><a href="/GameFolio/home" class="">menue 4</a></li>
                    <li class="li_class"><a href="/GameFolio/home" class="">menue 5</a></li>
                    <li class="li_class" id="six_id"><a href="/GameFolio/home" class="">menue 6</a></li>
                    <a href="/GameFolio/home" class="lien_iconeConnexion_class"><img src="/GameFolio/public/images/icone_connexion.png" alt="logo" class="icone_connexion"/></a>

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






