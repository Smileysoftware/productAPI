<?php

function view( $view , $params )
{

    echo $params['status'];
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