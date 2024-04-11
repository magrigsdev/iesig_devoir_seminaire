<?php 

class ModelsUtilisateurs extends Models{

    static function CheckLogin($identifiant, $mdp){
        //$datum = ModelsUtilisateurs::getLogin($identifiant, $mdp);

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