<?php


spl_autoload_register(
    function ($class) {
        $page = $class . ".php";
        if (file_exists("classes/" . $page)) {
            require_once "classes/" . $page;

        } elseif (file_exists("views/" . $page)) {
            require_once "views/" . $page;

        } elseif (file_exists("controllers/" . $page)) {
            require_once "controllers/" . $page;

        } elseif (file_exists("models/" . $page)) {
            require_once "models/" . $page;
        }
    }
);

HomeControllers::Home();

//var_dump(ModelsUtilisateurs::getLogin("elian","0000"));

//$tab = ModelsUtilisateurs::CheckLogin("elians", "0000");
//var_dump($tab);
//var_dump(Models::getItem("organisateurs","id_org",2));CheckLogin





