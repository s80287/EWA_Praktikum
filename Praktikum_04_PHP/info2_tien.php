<?php
//echo $_SERVER['HTTP_USER_AGENT'];

/*
function instr($str, $suchstr) 
{  // gibt eine saubere Integer-Wertangabe zurück ==>  -1 == nicht gefunden  >=0 Position des Substrings 
  $pos = strpos($str, $suchstr);
  if ($pos === false)   return -1; 
  else  return $pos; 
}


$browser =  $_SERVER["HTTP_USER_AGENT"];
echo "User-Agent=" .  $browser; 

   $b= "unbekannt"; 
   if ( instr( $browser, "Edg")>=0)   $b ="Edge";
   else if ( instr( $browser, "Chrome")>=0)   $b ="Chrome";
         else if ( instr( $browser, "Firefox")>=0)   $b ="Firefox";


 echo  "<br>Ihr Browser ist wahrscheinlich: "  .  $b ;
*/

$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strstr($user_agent, "Edge")) {
    echo "Edge";
}
else if (strstr($user_agent, "Firefox")) {
    echo "Firefox";
}
else if (strstr($user_agent, "Firefox")) {
    echo "Chrome";
}
else {
    echo "unbekannt";
}

?>