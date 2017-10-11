<?php

use App\Classes\dataClass;

//Load up the base framework
require_once('App/bootstrap/bootstrap.php');

//Initialise app
$app = new \App\Bootstrap\App();

//Call the model
$model = new dataClass();

//Fetch the data
$data = $model->getList();

//Pass data to the view object.
view( 'home' ,  compact ('data') );