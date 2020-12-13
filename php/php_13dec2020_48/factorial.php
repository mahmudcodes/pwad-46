<?php    
function factorial($n)    
{    
    if ($n < 0)    
        return -1; /*Wrong value*/    
    if ($n == 0)    
        return 1; /*Terminating condition*/    
    return ($n * factorial ($n -1));    
}    
    
echo factorial(4);    
?>