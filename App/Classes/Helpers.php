<?php
//Class is purposfully not namespaced so that it is globally acecssible.

use App\Classes\View;

################################################################################
# Quick method to fire off a view
################################################################################
/**
 * @param $view
 * @param $params
 */
function view( $view , $params )
{

    //Create a new View instance and pass the path and params properties
    $view = new View( $view , $params );

}

################################################################################
# Pretty little function to echo out the data passed.
# Gracefully handles Arrays and Strings
################################################################################
/**
 * @param $data
 */
function dump( $data )
{

    echo '<pre style="border: 1px solid #c11c1c; margin: 4px; padding: 4px; background-color: #ffc3c3;">';
    if ( gettype( $data ) == 'array' OR gettype( $data ) == 'object' ) {
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
/**
 * @param $key
 *
 * @return mixed
 */
function config( $key )
{
    //Open the file and find the key
    $config = include(dirname( __DIR__ ) . '/config.php');

    return $config[$key];
}