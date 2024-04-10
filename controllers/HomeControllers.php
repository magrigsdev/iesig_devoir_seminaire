<?php 

class HomeControllers{

    static function Home(){
        if(empty($_GET)){
            include "views/index.php";
        }
    }
}