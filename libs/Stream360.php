<?php

require_once '../Loader.php';

class Stream360 implements Stream{
    
    public function __construct()
    {
        
    }
    
    public function getStream()
    {
        return "360p"; //composition
    }
}

?>