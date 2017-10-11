<?php

use App\Classes\dataClass;


require_once('App/bootstrap/bootstrap.php');
$app = new \App\Bootstrap\App();

$model = new dataClass();
$product_id = $model->getProductID( $_SERVER['REQUEST_URI'] );
$info = $model->getProductInfo( $product_id );

view( 'info' ,  compact ('info') );