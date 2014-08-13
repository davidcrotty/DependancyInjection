<?php

 function Loader($name)
{
    $staticPath = $_SERVER['DOCUMENT_ROOT'].'/server/DependancyInjection/';
    $directories = array('','libs/Auryn/','code/','other/','libs/');
    
    $fileTypes = array(
        '%s.php'
    );
    
    
    foreach($directories as $directory)
    {
 
        foreach($fileTypes as $fileType)
        {
            //echo $directory;
            //adds directory and the f
            $path = $staticPath.$directory.sprintf($fileType,$name);
            //echo $path." ";
            if(file_exists($path))
            {
                include_once $path;
                return;
            }else
            {
                //don't return, breaks out of loop
            }
        }
    }
}    
    
spl_autoload_register("Loader"); #name of the function

?>