<?php 

class ModelsCommentaire extends Models{
    static function getAll()
    {
        return Models::getItems("commentaire");
    }
}