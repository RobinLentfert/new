<?php




 function is_palindrom($wort){
     
    $wort = strtolower($wort);
    $i = 0;
    $z = strlen($wort)-1;
        
    while($i <= strlen($wort)/2)
    {
        if($wort[$i++] != $wort[$z--])
            return false;
    }
    return true;
}
     
   
?>
   

   