<?php
namespace App\Classes;

/**
 * Class View
 * @package App\Classes
 */
class View
{

    //The parameters to be passed to the view
	/**
     * @var
     */
    protected $params;

    //The path of the view file
	/**
     * @var string
     */
    protected $viewPath;


	/**
     * View constructor.
     *
     * @param $view
     * @param $params
     */
    function __construct( $view , $params )
    {

        //Set up the proerties for this class
        $this->params = $params;
        $this->viewPath = dirname( __DIR__ ) . '/Views/' . $view . '.php';

        //Bring in the view
        include( $this->viewPath );

        
    }

}