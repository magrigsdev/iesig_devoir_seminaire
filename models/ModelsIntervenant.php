<?php 

class ModelsIntervenant extends Models{
    static function getAll()
    {
        return Models::getItems("intervenant");
    }
}