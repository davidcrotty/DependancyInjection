<?php

require_once '../Loader.php';

class Stream1080 implements Stream{
    
    
    public function __construct()
    {
        
    }
    
    public function getStream()
    {
        return "1080p"; //composition
    }
}

?>