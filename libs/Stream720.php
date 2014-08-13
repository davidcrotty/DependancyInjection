<?php

require_once '../Loader.php';

class Stream720 implements Stream{
    
    
    public function __construct()
    {
        
    }
    
    public function getStream()
    {
        return "720p"; //composition
    }
}

?>