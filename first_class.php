<?php
//variables
echo "<h1>Hello World</h1>";
// $name = 'Asura';
// $pi = 3.142;
// echo "Hey, My name is $name"; // double quotes can be used to output variables but not a single quote

// string functions
// echo $name[2];
// echo strlen($name);
// echo strtoupper($name);
// echo strtolower($name);
// echo str_replace('s','r',$name);

//number functions
// echo floor($pi);
// echo ceil($pi);
// echo pi();

// escaping characters with (\)
// echo "The woman was excited and then decided to celebrate with \"Unakaga\"" ;

// echo $name; //for string but can not echo an array
// print $name;
// print_r($name); // print_r = print readable
// echo "<br/>Hello " .$name . "<br/>"; // . for concatenation

// constansts
// define("NAME","Asura");
// echo NAME;

// arrays
// indexed arrays
// $myArray = array("Oyin", 'Asura', 'Lizzy', 'Wisdom');
// $myArray1 = ["Oyin", 'Asura', 'Lizzy', 'Wisdom'];
// array_push($myArray, 'Fola'); // pushing to an array
// $myFinalArray = array_merge($myArray,$myArray1);
// print_r($myFinalArray)
// $myArray[] = 'Fola';
// print_r($myArray);
// echo json_encode($myArray);
// echo $myArray[1];
// echo count($myArray);

//Associative Array (value and key-pairs)
// $assoArray = array("name"=>"Wizzy","dept"=>'Cyber and Web',"age"=>'1000yrs');
// print_r($assoArray);
// echo $assoArray['age'];


//Object
// $myObj = new stdClass;
// $myObj->name = 'Asura';
// $myObj->dept = 'Web';
// $myObj->age = 'none';
// print_r($myObj);
// echo $myObj->name;

// loops
// for($i=0;$i <count($myArray); $i++){
//  echo "<h4>Name is ".$myArray[$i] . "</h4>";
// };
// foreach($assoArray as $key => $value)
// {
//     echo $value;
// };
// foreach($myArray as $key => $value)
// {
//     echo $value;
// }

//Multidimension array - array within an array
// $anoArray =[];
// $firstArray = array('Tope','Tunde');
// $secArray = array('Asura','Oyin');
// array_push($anoArray,$firstArray,$secArray);

// foreach ($anoArray as $eachArray){
//     echo "<div>All Names</div>";
//     for ($i=0; $i <count($eachArray); $i++) { 
//         echo "<h4> Name is ". $eachArray[$i]."</h4>";
//     }
// } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <h2 class="text-center">Php</h2>
    <!-- <select name="" id="">
        <option value=""><?php echo $myArray[0]?></option>
        <option value=""><?php echo $myArray[1]?></option>
        <option value=""><?php echo $myArray[2]?></option>
        <option value=""><?php echo $myArray[3]?></option>
    </select> -->
</body>
</html>