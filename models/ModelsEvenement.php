<?php 

class ModelsEvenement extends Models{
    static function getAll()
    {
        return Models::getItems("evenement");
    }
}