<?php 

class ModelsOrganisateurs extends Models{

  static function getAll(){
        return Models::getItems("organisateurs");
  }
}