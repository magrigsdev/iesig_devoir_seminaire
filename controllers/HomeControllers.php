<?php 

class HomeControllers{
    
    /**
     * Home: page d'accueil fonction static
     * quand get est vide on affiche index qui est dans views/index
     * @return void
     */
    static function Home(){
        if(empty($_GET)){
            include "views/vieworganisateurs.php";
        }

        if(isset($_GET['action'])){
            $url = $_GET['action'];
            switch ($url) {
                case 'checklogin':
                    # code...
                    
                    $user = htmlspecialchars_decode($_POST["identifiant"]);
                    $mdp = htmlspecialchars_decode($_POST["mdp"]);
                    $check = ModelsUtilisateurs::CheckLogin($user, $mdp);
                   
                    if ($check) {
                        include "views/vieworganisateurs.php";
                    } else {
                        $_GET['action'] = "";
                        header("location: ");
                    
                    }
                    break;
                case 'list_sem':
                    //var_dump($_GET['action'] . " ---- " . $_GET['id']);
                    
                    include "views/list_sem.php";
                    break;
                default:
                    # code...
                    break;
            }
        }
        



    }

}