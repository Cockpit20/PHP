<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>

<body>
    <?php
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";

    array_push($cars, "Ford");
    var_dump($cars);



    // Associative arrays are arrays that use named 
    // keys that you assign to them.
    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    echo $car["model"];

    foreach ($car as $x => $y) {
        echo "$x: $y <br>";
    }

    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as &$x) {
        $x = "Ford";
    }
    // unset($x);
    $x = "ice cream";
    var_dump($cars);

    // Note: Remember to add the unset() function after the loop.

    // Without the unset($x) function, 
    // the $x variable will remain as a reference to the last array item.

    $fruits = array("Apple", "Banana", "Cherry");
    array_push($fruits, "Orange"); //Multiple fruits can be added
    $fruits[] = "Pineapple";
    foreach ($fruits as $fruit) {
        echo "<br>$fruit";
    }


    // REMOVING ARRAY ITEMS -> array_splice() function is used
    // re-ararnge the indexes
    $cars = array("Volvo", "BMW", "Toyota");
    array_splice($cars, 1, 1);
    echo "<br>";
    var_dump($cars);


    // Note: The unset() function does not re-arrange the indexes, 
    // meaning that after deletion the array will no longer contain the missing indexes.

    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    $newarray = array_diff($cars, ["Mustang", 1964]);
    echo "<br>";
    var_dump($newarray);
    // Note: The array_diff() function takes values as parameters, and not keys.

    
    ?>
</body>

</html>