<?php 

class Models{
    static function bd(){
        return  new PDO("mysql:host=127.0.0.1;dbname=tp_seminaire", "root", "", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
        
    /**
     * getItems
     *
     * @param  mixed $table
     * @return array array or boolean
     */
    static function getItems($table){
        $pdo = Models::bd();
        $sql = "SELECT * FROM " . $table;
        $stat = $pdo->prepare($sql);
        $stat->execute();
        return $stat->fetchAll();  
    }
    
    /**
     * getItem
     *
     * @param  mixed $table
     * @param  mixed $champs
     * @param  mixed $idItem
     * @return array array or boolean
     */
    static function getItem($table, $champs, $idItem){
        $idItem = intval($idItem);
        $pdo = Models::bd();
        $sql = "SELECT * FROM ".$table." WHERE ". $champs ."= :id" ;
        $stat = $pdo->prepare($sql);
        $stat->execute([
            "id" => $idItem
        ]);
       
        //si le tableau est vide il renvoie : false
        // if(!$stat->fetch()) {
        //     return false;
        // } 

        return $stat->fetch();
    }
    static function getItemsByAll($table, $champs, $idItem)
    {
        $idItem = intval($idItem);
        $pdo = Models::bd();
        $sql = "SELECT * FROM " . $table . " WHERE " . $champs . "= :id";
        $stat = $pdo->prepare($sql);
        $stat->execute([
            "id" => $idItem
        ]);

        //si le tableau est vide il renvoie : false
        // if(!$stat->fetch()) {
        //     return false;
        // } 

        return $stat->fetchAll();
    }
    
    /**
     * delItem
     *
     * @param  mixed $table
     * @param  mixed $champs
     * @param  mixed $idItem
     * @return boolean  boolean
     */
    static function delItem($table, $champs, $idItem){
        $idItem = intval($idItem);
        $pdo = Models::bd();

        if(!empty(Models::getItem($table,$champs,$idItem))){
            $sql = "DELETE * FROM " . $table . " WHERE " . $champs . "= :id";
            $stat = $pdo->prepare($sql);
            $stat->execute([
                "id" => $idItem
            ]);
            return true;
        }
        return false; 
    }



}