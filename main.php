<?php
$array1 = ['apple','malakor','banana','som'];
$array2 = ['apple'=>1,'malakor'=>2,'banana'=>3,'som'=>4];

echo json_encode($array1[0]) . " " . "มีทั้งหมด" . " " .json_encode($array['apple']) . " ลูก" . "\n";
echo json_encode($array1[2]) . " " . "มีทั้งหมด" . " " .json_encode($array['banana']) . " ลูก";

$array3 = ['Name' => 'Kate',  'Pet' => ["Dog" => "Corgi", "Cat" => "Persian"]];
echo json_encode($array3);

//--DO Thidaratmata--
$arr=array("apple"=>"1","banana"=>"3");
echo "apple is " . $arr['apple']." , "."banana is " . $arr['banana'] . "\n";

$myObj = new stdClass();
$myObj->name = "Kate";
$myObj->Pet = ["Dog" => "Corgi", "Cat" => "Persian"];
$myJSON = json_encode($myObj);
echo $myJSON;
//--END Thidaratmata--
?>
