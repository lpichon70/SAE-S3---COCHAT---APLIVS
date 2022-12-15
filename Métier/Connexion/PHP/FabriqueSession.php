<?php

class FabriqueSession
{
    private $_DDCS = "DDCS";
    private $_police = "POLICE";
    private $_club = "CLUB";

    //Constructeur de la classe
    //Permet de donner un statut via une variable de cession à un utilisateur en fonction de son status initialiser dans la base 
    //de donnéds lors de l'inscription
    public function __construct($statut)
    {
        switch($statut)
        {
            case "DDCS":
                $_SESSION["DDCS"] = false;
                break;

            case "POLICE":
                $_SESSION["POLICE"] = false;
                break;

            case "CLUB":
                $_SESSION["CLUB"] = false;
                break;
        }
    }
}


?>