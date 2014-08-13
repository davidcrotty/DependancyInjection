<?php

include_once '../Loader.php';
include_once '../vendor/autoload.php';

$injector = new Auryn\Provider();
$injector->define('Video',array('videoStream'=>'Stream720'));

$lowvideo = $injector->make('Video');
$lowvideo->getStream();

$injector->define('Video',array('videoStream'=>'Stream360'));
$lowvideo = $injector->make('Video');
$lowvideo->getStream();

$injector->define('Video',array('videoStream'=>'Stream1080'));
$lowvideo = $injector->make('Video');
$lowvideo->getStream();

?>