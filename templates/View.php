<?php

namespace Templates;

define('VIEWSBASES', dirname(__DIR__).DIRECTORY_SEPARATOR.'templates/bases'.DIRECTORY_SEPARATOR);
define('Templates', dirname(__DIR__).DIRECTORY_SEPARATOR.'templates/'.DIRECTORY_SEPARATOR);


class View
{


    private string $chemin;
    private string $cheminBaseUsers;
    private string $cheminBaseAdmin;

    public function __construct(string $chemin)
    {

        $this->chemin =$chemin;
        $this->cheminBaseUsers="users/";
        $this->cheminBaseAdmin="administrators/";

    }

    /**
     * @return string
     */
    public function getCheminBaseUsers(): string
    {
        return $this->cheminBaseUsers;
    }

    /**
     * @param string $cheminBaseUsers
     */
    public function setCheminBaseUsers(string $cheminBaseUsers): void
    {
        $this->cheminBaseUsers = $cheminBaseUsers;
    }

    /**
     * @return string
     */
    public function getCheminBaseAdmin(): string
    {
        return $this->cheminBaseAdmin;
    }

    /**
     * @param string $cheminBaseAdmin
     */
    public function setCheminBaseAdmin(string $cheminBaseAdmin): void
    {
        $this->cheminBaseAdmin = $cheminBaseAdmin;
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

        if (file_exists(Templates . $this->getChemin()) && strpos(Templates. $this->getChemin(), $this->getCheminBaseUsers()) != false) {

            ob_start();

            if ($donnees) {
                extract($donnees);
            }
            require Templates.$this->getChemin();
            $content = ob_get_clean();

            require VIEWSBASES . 'usersBase.php';//traiter le cas de admin base

        } else {
            if (file_exists(Templates . $this->getChemin()) && strpos(Templates . $this->getChemin(), $this->getCheminBaseAdmin()) != false) {

                ob_start();

                if ($donnees) {
                    extract($donnees);
                }
                require Templates.$this->chemin;
                $content = ob_get_clean();

                require VIEWSBASES . 'administratorsBase.php';//traiter le cas de admin base

            } else {
                throw new \Exception("Attention erreur, la vue ou template demander n'existe pas pour Utilisateurs!!!");
            }
        }
    }


}