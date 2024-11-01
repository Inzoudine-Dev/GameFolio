<?php

namespace Templates;

define('VIEWSUSERS', dirname(__DIR__).DIRECTORY_SEPARATOR.'Templates\views\users'.DIRECTORY_SEPARATOR);
define('VIEWSBASES', dirname(__DIR__).DIRECTORY_SEPARATOR.'Templates'.DIRECTORY_SEPARATOR);
define('VIEWSSHARED', dirname(__DIR__).DIRECTORY_SEPARATOR.'Templates\views\shared'.DIRECTORY_SEPARATOR);
define('VIEWS_ADMIN', dirname(__DIR__).DIRECTORY_SEPARATOR.'Templates\views\administrators'.DIRECTORY_SEPARATOR);


class View
{



    private string $fichier;
    private string $action;


    public function __construct(string $action)
    {

        $this->fichier = 'view'. $action . '.php';
        $this->action=$action;

    }


    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getFichier(): string
    {
        return $this->fichier;
    }


    public function view(array $donnees = null)
    {

        if(file_exists(VIEWSUSERS . $this->getFichier()) && file_exists(VIEWSBASES.'bases/usersBase.php')) {
            ob_start();

            if($donnees){
                extract($donnees);
            }
            require VIEWSUSERS. $this->getFichier();
            $content = ob_get_clean();


            require VIEWSBASES. 'bases/usersBase.php';//de vue utilisateurs on sort une fois et on entre dans templates.
        }
        else{
            throw new \Exception("Attention erreur, la vue ou template demander n'existe pas pour Utilisateurs!!!");
        }
    }

    public function viewUserShared(array $donnees = null)
    {

        if(file_exists(VIEWSSHARED . $this->getFichier()) && file_exists(VIEWSBASES.'bases/usersBase.php')) {
            ob_start();

            if($donnees){
                extract($donnees);
            }
            require VIEWSSHARED. $this->getFichier();
            $content = ob_get_clean();


            require VIEWSBASES. 'bases/usersBase.php';//de vue utilisateurs on sort une fois et on entre dans templates.
        }
        else{
            throw new \Exception("Attention erreur, la vue ou template demander n'existe pas pour Utilisateurs!!!");
        }
    }

    public function viewAdmin(array $donnees = null)
    {

        if(file_exists(VIEWS_ADMIN . $this->getFichier()) && file_exists(VIEWSBASES.'bases/administratorsBase.php')) {
            ob_start();

            if($donnees){
                extract($donnees);
            }
            require VIEWS_ADMIN.$this->getFichier();
            $content = ob_get_clean();


            require VIEWSBASES. 'bases/administratorsBase.php';//de vue utilisateurs on sort une fois et on entre dans templates.
        }
        else{
            throw new \Exception("Attention erreur, la vue ou template demander n'existe pas pour Utilisateurs!!!");
        }
    }


    public function viewAdminShared(array $donnees = null)
    {

        if(file_exists(VIEWSSHARED . $this->getFichier()) && file_exists(VIEWSBASES. 'bases/administratorsBase.php')) {
            ob_start();

            if($donnees){
                extract($donnees);
            }
            require VIEWSSHARED. $this->getFichier();
            $content = ob_get_clean();


            require VIEWSBASES. 'bases/administratorsBase.php';//de vue utilisateurs on sort une fois et on entre dans templates.
        }
        else{
            throw new \Exception("Attention erreur, la vue ou template demander n'existe pas pour Utilisateurs!!!");
        }
    }

}