<?php
$val1=["red", "blue","black","gray","green"];//manual array
$val2=["one"=>"this is post one",
"two"=>"this is post two",
"three"=>"this is post three",
"four"=>"this is post four"];//Associative array
$val3=[["name"=>"Aung Aung","age"=>"20"],
"name"=>["Maung Maung","age"=>"30"],
["name"=>"Mya Mya","age"=>"28"],
["name"=>"Hla Hla","age"=>"18"]
];//Multidimensional array
$val13=
var_dump($val1);
echo "<hr/>";
var_dump($val2);
echo "<hr/>";
var_dump($val3);
echo "<hr/>";
echo $val1[0];
echo "<hr/>";
echo $val2["one"];
echo "<hr/>";
echo $val3[2]["age"];

echo "<hr/>";
foreach($val1 as $data){
    echo $data. "<br/>";
}
echo "<hr/>";
foreach($val2 as $ass){
    echo $ass. "<br/>";
}
echo "<hr/>";

foreach($val3 as $multi){
    foreach($multi as $single){
        echo $single. "<br/>"; 
    }
    
}
echo "<hr/>";
foreach($val2 as $key=>$value){
    echo $key. "<br/>";
    echo $value."<br/>
}
echo "<hr/>";

foreach($val3 as $multi){
    foreach($multi as $single){
        echo $single. "<br/>"; 
    }
    
}




?>