
<!DOCTYPE html>

<html lang="fr" >

    <head>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $titre_page ?></title>
        <link rel="shortcut icon" href="/GestionPortefeuilleClients/public/images/logoGestionClient.png" />
        <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/users/usersBase.css" media="all" />

    </head>

    <body>

        <header class="header_class">
            <div class="header_content">
                <a href="/GestionPortefeuilleClients/accueil"><img src="/GestionPortefeuilleClients/public/images/logoGestionClient.png" alt="logo" class="logo_class"/></a>
                <h1>Bienvenue sur l'application de gestion des clients</h1>
            </div>
        </header>

        <main class="main_class">

            <?php echo $content ?>

        </main>


        <footer class="footer_class">

        </footer>

    </body>

    <script type="text/javascript" src=""></script>

</html>






