<?php 

class ModelsUtilisateurs extends Models{

    static function CheckLogin($identifiant, $mdp){
        //$datum = ModelsUtilisateurs::getLogin($identifiant, $mdp);
        $users = Models::getItems("utilisateurs");

        foreach ($users as $user) {

            if($identifiant == $user['identifiant'] && $mdp == $user['mdp']){
                return true;
            }
        }
        return false; 
    }

    
    static function getLogin($user, $mdp){
        $pdo = Models::bd();
        $sql = "SELECT * FROM utilisateurs WHERE identifiant =:user AND mdp =:mdp";
        $stat = $pdo->prepare($sql);
        $stat->execute([
            "user" => $user,
            "mdp"=> $mdp
        ]);
        //si vide return false
        return $stat->fetch();

    }
}