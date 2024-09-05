<?php

namespace Templates;

define('VIEWS', dirname(__DIR__).DIRECTORY_SEPARATOR.'Templates\views\users'.DIRECTORY_SEPARATOR);


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

        if(file_exists(VIEWS . $this->getFichier()) && file_exists(VIEWS.'../../bases/users/usersBase.php')) {
            ob_start();

            if($donnees){
                extract($donnees);
            }
            require VIEWS. $this->getFichier();
            $content = ob_get_clean();


            require VIEWS.'../../bases/users/usersBase.php';//de vue utilisateurs on sort une fois et on entre dans templates.
        }
        else{
            throw new \Exception("Attention erreur, la vue ou template demander n'existe pas pour Utilisateurs!!!");
        }
    }

}