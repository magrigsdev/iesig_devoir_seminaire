<?php 

class UtilisateursControllers {

    static function create()
    {
        if (empty($_GET['creation'])) {
            include "views/create.php";
        }
    }
    
}