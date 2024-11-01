
<!DOCTYPE html>

<html lang="fr" >

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" href="/GameFolio/public/images/logoAdmin.png" />
    <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/administrators/adminHeader.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/administrators/style_viewLoginAdmin.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/administrators/style_viewHomeAdmin.css" media="all" />

</head>

<body>

<header class="header_class">
    <?php include '../templates/views/shared/administrators/adminHeader.php'?>
</header>


<main class="main_class">
    <h1>test admin base !!</h1>
    <?php echo $content ?>

</main>


<footer class="footer_class">
    <?php include '../templates/views/shared/administrators/adminFooter.php'?>
</footer>

</body>

<script type="text/javascript" src=<?php echo $scriptIcone_Connection ?>> </script>

</html>






