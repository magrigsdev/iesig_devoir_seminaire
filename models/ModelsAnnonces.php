<?php 

class ModelsAnnonces extends Models{
    static function getAll()
    {
        return Models::getItems("intervenant");
    }
}