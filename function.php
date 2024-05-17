<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function myMessage()
    {
        echo "Hello world!<br>";
    }

    myMessage();

    function familyName($fname)
    {
        echo "$fname Refsnes.<br>";
    }

    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");

    function familyNameYear($fname, $year)
    {
        echo "$fname Refsnes. Born in $year <br>";
    }

    familyNameYear("Hege", "1975");
    familyNameYear("Stale", "1978");
    familyNameYear("Kai Jim", "1983");


    function add_five(&$value)
    {
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;
    ?>
</body>

</html>