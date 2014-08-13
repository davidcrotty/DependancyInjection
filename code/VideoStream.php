<?php

include_once '../Loader.php';
include_once '../vendor/autoload.php';

$container = new Pimple\Container();

/**
 * Complex object, strategy dependancies
 */
 //Strategy
$container['stream1080'] = function($c){
      return new Stream1080();
};
 
//factory object 
$container['video'] = function($c){
    return new Video($c['stream1080']);
};

$value = $container['video'];
$value->getStream();
 
/**
 * Simple object, no dependancies
 */




?>