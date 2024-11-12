<?php

namespace Templates;

define('VIEWSBASES', dirname(__DIR__).DIRECTORY_SEPARATOR.'Templates'.DIRECTORY_SEPARATOR);


class View
{


    private string $chemin;

    public function __construct(string $chemin)
    {

        $this->chemin =$chemin;

    }

    /**
     * @return string
     */
    public function getChemin(): string
    {
        return $this->chemin;
    }

    /**
     * @param string $chemin
     */
    public function setChemin(string $chemin): void
    {
        $this->chemin = $chemin;
    }



    public function view(array $donnees = null)
    {

            if(file_exists("../templates/".$this->getChemin()) && strpos("../templates/".$this->getChemin(), "views/users/")!=false){

                ob_start();

                if ($donnees) {
                    extract($donnees);
                }
                require $this->chemin;
                $content = ob_get_clean();

                require VIEWSBASES . 'bases/usersBase.php';//traiter le cas de admin base

            }

        if(file_exists("../templates/".$this->getChemin()) && strpos("../templates/".$this->getChemin(), "views/administrators/")!=false){

            ob_start();

            if ($donnees) {
                extract($donnees);
            }
            require $this->chemin;
            $content = ob_get_clean();

            require VIEWSBASES . 'bases/administratorsBase.php';//traiter le cas de admin base

        }

        else{
            throw new \Exception("Attention erreur, la vue ou template demander n'existe pas pour Utilisateurs!!!");
        }
    }


}