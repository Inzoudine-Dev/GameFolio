
<!DOCTYPE html>

<html lang="fr" >

    <head>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php if(isset($title)) echo htmlspecialchars($title,ENT_QUOTES,'UTF-8'); ?></title>
        <link rel="shortcut icon" href="/GameFolio/public/images/logo_jeuxVideos.png" />
        <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/users/usersBase.css" media="all" />
        <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/users/style_viewHome.css" media="all" />
        <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/users/style_viewLogin.css" media="all" />
        <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/users/usersHeader.css" media="all" />
        <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/users/viewErrorLogout.css" media="all" />

    </head>

    <body>

        <header class="header_class">
            <?php include '../templates/views/shared/users/usersHeader.php'?>
        </header>


        <main class="main_class">

            <?php if(isset($content))echo $content ?>

        </main>


        <footer class="footer_class">
            <?php include '../templates/views/shared/users/usersFooter.php'?>
        </footer>

    </body>

    <script type="text/javascript" src="/GameFolio/public/scriptsJs/users/scriptMenueHeader.js"> </script>
    <script type="text/javascript" src=<?php if(isset($scriptDeconecter)) echo $scriptDeconecter ?>> </script>
    <script type="text/javascript" src=<?php if(isset($scriptConecter)) echo $scriptConecter ?>> </script>

</html>






