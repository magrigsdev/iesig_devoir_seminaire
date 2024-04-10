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
