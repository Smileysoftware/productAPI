<?php
//Class is purposfully not namespaced so that it is globally acecssible.

use App\Classes\View;

################################################################################
# Quick method to fire off a view
################################################################################
function view( $view , $params )
{

    //Create a new View instance and pass the path and params properties
    $view = new View( $view , $params );

}

################################################################################
# Pretty little function to echo out the data passed.
# Gracefully handles Arrays and Strings
################################################################################
function dump( $data )
{

    echo '<pre style="border: 1px solid #c11c1c; margin: 4px; padding: 4px; background-color: #ffc3c3;">';
    if ( gettype( $data ) == 'array' ){
        var_dump( $data );        
    } else {
        echo $data;
    }
    echo '</pre>';

}

################################################################################
# Simple getter method to pull the proper key value from the config file.
# The config file is not included within the repo for security purposes.
################################################################################
function config( $key )
{
    //Open the file and find the key
    $config = include(dirname( __DIR__ ) . '/config.php');

    return $config[$key];
}