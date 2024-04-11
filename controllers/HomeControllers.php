<?php 

class HomeControllers{
    
    /**
     * Home: page d'accueil fonction static
     * quand get est vide on affiche index qui est dans views/index
     * @return void
     */
    static function Home(){
        if(empty($_GET)){
            include "views/viewIndex.php";
        }

        if ($_GET['choix']) {
            include "views/vieworganisateurs.php";
            # code...
        }
    }

}