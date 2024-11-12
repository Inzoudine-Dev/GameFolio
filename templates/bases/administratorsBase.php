
<!DOCTYPE html>

<html lang="fr" >

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if(isset($title)) echo $title ?></title>
    <link rel="shortcut icon" href="/GameFolio/public/images/imagesLogo/logoAdministrators.png" />
    <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/administrators/adminHeader.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/administrators/style_viewLoginAdmin.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/administrators/style_viewHomeAdmin.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/GameFolio/public/styleCss/administrators/adminBase.css" media="all" />

</head>

<body>

<header class="header_class">
    <?php include '../templates/views/layout/administrators/adminHeader.php'?>
</header>


<main class="main_class">

    <?php if(isset($content)) echo $content ?>

</main>


<footer class="footer_class">
    <?php include '../templates/views/layout/administrators/adminFooter.php'?>
</footer>

</body>

</html>






