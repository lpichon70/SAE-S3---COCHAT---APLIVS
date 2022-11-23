<?php

class FabriqueSession
{
    private $_DDCS = "DDCS";
    private $_police = "POLICE";
    private $_club = "CLUB";

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