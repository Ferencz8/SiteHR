<?php
/**
 * Created by PhpStorm.
 * User: Ferencz
 * Date: 11/15/2015
 * Time: 12:20 AM
 */

//class Autoloader{

    function searchFile($fileName){
//        $direc = getcwd();
        $di = new RecursiveDirectoryIterator("C:\\xampp\\htdocs\\php-get-started\\SiteHR");
        foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
            echo $filename . ' - ' . $file->getSize() . ' bytes <br/>';
            if ($file -> getFilename() === $fileName.".php")
            {
                $path = $filename;
                return $path;
            }
        }
    }

    function __autoload($className){
        $fileLocation = searchFile($className);
        require_once($fileLocation);
    }
//}
