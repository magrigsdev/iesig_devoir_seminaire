<?php 

class ModelsParticipant{
    static function getAll()
    {
        return Models::getItems("intervenant");
    }
}