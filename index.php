<?php 
    //---- write a variable in php ----//
    $name = 'Mizan';
    $lastName = 'Choudhury';

    //---- To join variables or strings use . ----//
    // $fullName = $name.' '.$lastName;
    
    //---- Injecting variables in strings ----//
    $fullName = "My full name is $name $lastName";

    //---- Constant done with define----//
    define('dob', 1998);

    //---- Arrays ----//
    $cars = array('Mercedes', 'BMW', 'Audi');

    // ---- Or arrays like this ----//
    $cars = [
        'Mercedes',
        'BMW',
        'Audi'
    ];

    //---- Adding into array ----//
    $cars [] = 'Ferarri';

    //---- Adding to the start of an array ----//
    array_unshift($cars, "Lamborghini");

    echo "$cars[1]<br>";
    echo "$cars[2]<br>";
    echo "$cars[3]<br>";

    //---- Printing whats in an array ----//
    print_r($cars);
    echo "<br>";
    
    //---- to know the length of an array use count----//
    echo count($cars);
    echo "<br>";

    //---- Seeing whats in an array and what type of variable it is ----//
    echo var_dump($cars);
    echo "<br>";

    //--- add a Value to an array to make it an asscociative array----//
    $movieScore = array('UP' => 10, 'Gladiator' => 8, 'Matrix' => 5);
    echo $movieScore ['UP'];
    echo "<br>";

    //---- a FOR loop ----//
    for($i = 0; $i < count($cars); $i++) {
        echo "My current car is $cars[$i]<br>";
    }

    //--- FOREach loop better for Arrays ----//
    foreach($cars as $car) {
        echo "I love the $car brand <br>";
    }

    //---- Can also do a FOReach for associative arrays ----//
    foreach($movieScore as $movie => $score){
        echo "The movie $movie has a score of $score <br>";
    }

    //---- Creating a function ----//
    function buying () {
        echo "this is the buying function <br>";
    }

    buying();

    //---- Passing a value in ----//
    //---- If no item is being put in when calling purchase function then it will default to JET ----//
    function purchase($item = "Jet") {
        echo "I want to buy a $item <br>";
    }
    purchase("xbox");

    //----Practice examples ----//
    $myNumber = 5;

    function addFive($number){
        $number += 5;
    }
    addFive($myNumber);
    echo "My final number is $myNumber <br>";

    function addTen(&$number) {
        $number += 10;
    }

    addTen($myNumber);
    echo "My final number is $myNumber <br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>MY first php website</h1>
    <h1><?php echo $fullName; ?></h1>

    <!-- Constants do not need the $ when calling -->
    <h1><?php print dob ?></h1>
    <!-- associative arrays need to be called by their name and not indeces -->
    <h1>My movie score is:<?php echo $movieScore ['Matrix']?></h1>
</body>
</html>