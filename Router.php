<?php
/**
 *
 * @author Vimer
 * @link https://steamcommunity.com/id/vimerofficial/
 * @link https://github.com/V1merX
 *
 */

class Router {
    private $pages = array();

    function addRoute($url, $path){
        $this->pages[$url] = $path;
    }

    function route($url){
        $path = $this->pages[$url];
        $file_directory = "yourfiledir" . $path; // enter file dir.
        if ($path == '') {
            require "notfound"; // enter your page 404.
            die();
        }

        if ((file_exists($file_directory))){
            require $file_directory;
        } else {
            require "notfound";
            die();
        }

    }
}