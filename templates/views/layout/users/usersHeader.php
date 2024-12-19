
<div class="header_content">

    <nav class="nav_class">
        <a href="/GameFolio/users/home" class="lien_logo_class"><img src="/GameFolio/public/images/imagesLogo/logoUsers.png" alt="logo" class="logo_class"/></a>
        <ul class="nav_links">
            <li class="link"><a href="/GameFolio/users/home" class="">ACCUEIL</a></li>
            <li class="link"><a href="/GameFolio/users/home/games" class="">JEUX VIDEOS</a></li>
            <li class="link"><a href="/GameFolio/users/home/offres" class="">OFFRES</a></li>
            <li class="link"><a href="/GameFolio/users/home/infos" class="">NOUS</a></li>
            <li class="link"><a href="/GameFolio/users/home/boutiques" class="">NOS BOUTIQUES</a></li>
            <li class="link" id="six_id"><a href="/GameFolio/users/home/contacts" class="">CONTACTS</a></li>
            <li class="link" id="six_id"><a href="/GameFolio/administrators/login" class="">ADMIN</a></li>

        </ul>

        <div class="img_links">

            <img src="/GameFolio/public/images/imagesIconConnexion/icone_connexion.png" alt="icone" class="icone_connexion_class"  id="icone_connexion_id"/>

            <div class="links">

                <span class="arrow-down">▼</span>

                <div id="link_registration_id"><a href="/GameFolio/users/home/registration">Inscription</a></div>
                <div class="" id="link_conexion_id"><a href="/GameFolio/users/home/login">Connexion</a></div>
                <div class="" id="link_deconexion_id"><a href="/GameFolio/users/home/login/logout">Deconexion</a></div>
                <div class="" id="link_deconexion_id"><a href=""><?php if(isset($email)) echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8')?></a></div>

            </div>

        </div>

    </nav>

</div>

