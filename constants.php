<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <!-- Constants are automatically global accross the entire script -->
    <!-- To create a function, use the define() function -->

    <?php
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;

    echo "<br>";

    const MYCAR="Volvo";
    echo MYCAR;

    echo "<br>";

    define("cars",["Alfa Romeo","BMW","Toyota"]);
    echo cars[0];

    // PHP has nine predefined constants that change value 
    // depending on where they are used.
    // Therefore they are called "magic constants".
    // They are case in-sensitive

    // Constant	        Description	
    // __CLASS__	    If used inside a class, the class name is returned.	
    // __DIR__	        The directory of the file.	
    // __FILE__	        The file name including the full path.	
    // __FUNCTION__	    If inside a function, the function name is returned.	
    // __LINE__	        The current line number.	
    // __METHOD__	    If used inside a function that belongs to a class, both class and function name is returned.	
    // __NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
    // __TRAIT__	    If used inside a trait, the trait name is returned.	
    // ClassName::class	Returns the name of the specified class and the name of the namespace, if any.

    ?>
    
</body>
</html>