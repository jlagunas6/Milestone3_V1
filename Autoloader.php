<?php
/**
 * Created by PhpStorm.
 * User: JRL
 * Date: 10/20/18
 * Time: 12:23 AM
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//this file allows for a call to be called from a file of the same name

spl_autoload_register(function($class){

    //get the directories in which the file using Autoloader.php is from
    $last_directories = substr(getcwd(), strlen(__DIR__));

    //count how deep the file is in the directory
    $folder_depth = substr_count($last_directories, '/');

    //lists directories used in website
    $directories = ['businessService', 'businessService/model', 'database', 'presentation', 'presentation/handlers', 'presentation/views', 'utility'];

    //looks within $directories listed for classed called within file
    foreach($directories as $d) {
        $currentDirectory = $d;
        for ($x = 0; $x < $folder_depth; $x++) {
            $currentDirectory = "../".$currentDirectory;
        }
        $classfile = $currentDirectory.'/'.$class.'.php';

        if (is_readable($classfile)) {
            if (require $d.'/'.$class.'.php') {
                break;
            }
        }
    }
});