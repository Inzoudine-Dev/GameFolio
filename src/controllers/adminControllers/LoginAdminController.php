<?php

namespace Maham\GameFolio\controllers\adminControllers;

use Config\routes\Route;
use Maham\GameFolio\controllers\Controller;

class LoginAdminController extends Controller
{

    #[Route('/GameFolio/administrators/login', 'GET')]
    public function index()
    {

        $Data["title"]="Login-Admin";/*determine le titre de la page*/
        /*$Data["image"]="/GameFolio/public/images/imagesGames/imageGame1.jpg";/*url image*/
        /*<?php echo $image;?> dans scr d'image sur la vue*/

        parent::renderAmdin("AdminLogin", $Data);
    }

    #[Route('/GameFolio/administrators/login/', 'GET')]
    public function indexRedirect()
    {

        $this->index();
    }

}