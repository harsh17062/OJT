<?php
$array1 = array(
                "key1" => 50,
                "key2" => 70,
                "key3" => 30
);
// array without keys
$array2 = array(20,10,40,30);
$array_bracets =["value1","value2","value3"];
// multidimentional array 
$array3 =array(
    "first" => array("first_first" => 20),
    "second" => array("second_first" => 20,
    "second_second"=> array(
        "second_second_first" => "sub sub array")
    )
    );

    echo "<pre>";
    print_r($array1);
    print_r($array2);
    print_r($array_bracets);
    print_r($array3);

    //sorting
    // $sort = sort($array1);
    // $sort = asort($array2);
    rsort($array1);
    ksort($array2);

    print_r($array1);
    print_r($array2);
?>