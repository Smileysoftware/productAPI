<?php

class App {

    function __construct(){
        
        ################################################################################
        # Engage some whizzy error reporting
        ################################################################################
        
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        ################################################################################
        #   Now lets load some classes
        ################################################################################

        //Go find the files in the classes folder, not the dotfiles, they're no use to man nor beast!
        $classes = array_diff(scandir('classes'), array('..', '.'));

        foreach( $classes as $class ){
            require('classes/' . $class);
        }

    }
}