<?php
echo "<h1>this is magic constant example</h1>";
echo "this is line :".__LINE__;
echo "<br>";
define('sandeep','24');
echo "this is age:".sandeep;
echo "<br>";
const SAN = "sandeep";
echo "this is name:".SAN;
echo "<br>";
class demoClass{
function demo(){
    echo "this is function :".__FUNCTION__;
    echo "<br>";
    echo "this is class:".__CLASS__;
    echo "<br>";
    echo "this is method:".__METHOD__;
    echo "<br>";
    echo "this is file:".__FILE__;
}
}
$obj = new demoClass();
$obj->demo();

?>