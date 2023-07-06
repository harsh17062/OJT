<?php

$array1 = array("red","green","black");
$array2 = array("blue","orange","grey");
$rev=array_reverse($array1);
print_r($rev);
echo '<br/>' . '<br/>' . '<br/>';

$search = array_search("grey",$array2);
print_r($search);
echo '<br/>'. '<br/>' . '<br/>';

foreach($array1 as $a)
{
    echo "size is:$a <br/>";
}
echo '<br/>'. '<br/>' . '<br/>';

$array3 = array("apple" => "100","Orange"=>"150","Peach"=>"250","Strawberry"=>"550");
print_r(array_change_key_case($array3,CASE_UPPER));
echo '<br/>'. '<br/>' . '<br/>';

print_r(array_change_key_case($array3,CASE_LOWER));
echo '<br/>'. '<br/>' . '<br/>';

print_r(array_chunk($array3,2));
echo '<br/>'. '<br/>' . '<br/>';

sort($array1);
foreach($array1 as $a)
{
    echo "$a <br/>";
}
echo '<br/>'. '<br/>' . '<br/>';

$flip = array_flip($array3);
$array4 =array(2,2);
print_r(array_product($array4));
echo '<br/>'. '<br/>' . '<br/>';

array_push($array1,"White","Pink");
print_r($array1);
echo '<br/>'. '<br/>' . '<br/>';

$a =array(1,2,3,2,3,1,4,6,4);
print_r(array_unique($a));
echo '<br/>'. '<br/>' . '<br/>';

function myfun($value,$key)
{
    echo"The key $key has the value $value <br/>";
}
array_walk($array3,"myfun");
echo '<br/>'. '<br/>' . '<br/>';

krsort($array2);
print_r($array2);
echo '<br/>'. '<br/>' . '<br/>';

ksort($array3);
print_r($array3);
echo '<br/>'. '<br/>' . '<br/>';

function myfun1($s)
{
    return("$s");
}
$a1 = array(10,20,30,40,50);
print_r(array_map("myfun1",$a1));

?>