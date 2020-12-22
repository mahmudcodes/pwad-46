<?php    
function display($number) {    
    if($number<=50){    
     echo "$number <br/>";    
     display($number+5);    
    }  
}    
    
display(3);    
?> 