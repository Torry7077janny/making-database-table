<?php

//three types of php array








$shopping_list=array("soap","sugar","mkate","maize flower","rice","omo","milk");
echo $shopping_list[4]."<br>";
$get_rice=$shopping_list[4];
echo $get_rice."<br>";
echo "Today i will eat $shopping_list[4] .$shopping_list[6]<br>";
echo 'Today i will eat '.$shopping_list[4].'and ' .$shopping_list[6].'<br>';
//looping through an indexed array
//for loop
//foreach loop
$num_items=count($shopping_list);
echo $num_items;
//looping through indexed array
//for loop
//foreach loop
for($i=0;$i<=$num_items;$i++){
    echo "$i $shopping_list[$i] <br>";
}
//counting/getting the number of items in an indexed array:use count()function
$num_items=count($shopping_list);
echo$num_items;
//looping through indexed array
// for loop
for($i=0;$i<=$num_items;$i++){
    echo"$i $shopping_list[$i]<br>";
    //echo $i."<br>";
}
//foreach loop:syntax
//for each ($name of array as$variable_t0_hold_item_per_loop){
// echo $variable_to_hold_item_per_loop;
//}
foreach ($shopping_list as$item){
    echo"$item<br>";
}

$shopping_list2=array(["soap"=>"500g","sugar"=>"1kg","mkate"=>"800g","maize flour"=>"5kg","rice"=>"1kg","omo"=>"2kg","milk"=>"1ltr"]);
//Accessing items in an assosiative array
$seth=$shopping_list2['maize flour'];
echo $seth.'<br>';
 //looping through assosiative array
foreach($shopping_list2 as $my_key=> $my_value){
    echo"KEY: $my_key =>VALUE:$my_value<br>";
}
$users=array(
    "1"=>array("Torry Janny", "torryjanny@gmail.com","pass1234"),
    "2"=>array("JohnDoe", "johndoe@gmail.com","pass1234word"),
    "3"=>array("MaryDoe", "marydoe@gmail.com","pass1234"),
    "4"=>array("Lucas Graham", "lucasgraham@gmail.com","pass1234"),
    "5"=>array("Paul", "paul@gmail.com","pass1234"),
);
foreach($users as $my_key=>$my_value){
    foreach($my_value as $value){
        echo "ID NO $my_key is $value <br>";
    }
}

























































?>