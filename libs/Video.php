<?php

require_once '../Loader.php';

class Video implements Stream{
    
    private $videotype;
    
    public function __construct(Stream $videoStream)
    {
        $this->videotype = $videoStream;
    }
    
    public function getStream()
    {
        echo $this->videotype->getStream(); //composition
    }
}

?>