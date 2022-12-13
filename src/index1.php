<?php
namespace Apsl;
use Apsl\Http\Request;
use Apsl\Swap;

class Aplication {
    public function Swap($a, $b){
    $temp = $a;
    $a = $b;
    $b =  $temp;
    $a = 1; 
    $b = 3;
    echo($a and $b);
 }
 


}
echo "Hello World";
?>