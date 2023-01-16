<?php

spl_autoload_register(function($class) {
    $path = "./model/" . $class . ".php";
    require_once $path; 
    
});

ini_set( 'session.cookie_httponly', 1 );
ini_set('session.cookie_samesite', 'strict');

session_start();

function printErrors() {
    if(isset($_SESSION['errors'])){
        
        echo "<ul style='color:red;'>";
        
        foreach ($_SESSION['errors'] as $error) {
            echo "<li>" . $error . "</li>";
        }
        
        echo "</ul>";   
        unset($_SESSION['errors']);
    }
}
function printErrorspw() {
    if(isset($_SESSION['errorspw'])){
        
        echo "<ul style='color:red;'>";
        
        foreach ($_SESSION['errorspw'] as $error) {
            echo "<li>" . $error . "</li>";
        }
        
        echo "</ul>";   
        unset($_SESSION['errorspw']);
    }
}

?>

