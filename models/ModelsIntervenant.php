<?php 

class ModelsIntervenant extends Models{
    static function getAll()
    {
        return Models::getItems("intervenant");
    }

    static function getOne($idItem){
        $inter =  Models::getItem("intervenant", "id_inter", $idItem);
        return $inter['nom'];
    }

    static function getEventByInter($id){
        $events = Models::getItemsByAll("evenement","fk_id_inter",$id);
        //var_dump($events);
        if(!empty($events)){
            return $events;
        }
        return false;
    }
}