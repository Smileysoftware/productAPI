<?php

use App\Classes\dataClass;

//Load up the base framework
require_once('App/bootstrap/bootstrap.php');

//Initialise app
$app = new \App\Bootstrap\App();

//Call the model
$model = new dataClass();

//Get the ID
$product_id = $model->getProductID( $_SERVER['REQUEST_URI'] );

//Fetch the data
$info = $model->getProductInfo( $product_id );

//Pass data to the view object.
view( 'info' ,  compact ('info') );