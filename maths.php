<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
</head>

<body>

    <?php
    echo pi();
    echo "<br>";

    echo(min(0, 150, 30, 20, -8, -200));
    echo "<br>";
    echo(max(0, 150, 30, 20, -8, -200));
    echo "<br>";
    
    echo(abs(-6.7));
    echo "<br>";

    echo(sqrt(64));
    echo "<br>";

    echo(round(0.60));
    echo "<br>";
    echo(round(0.49));
    echo "<br>";

    echo(rand(10,100));
    ?>

</body>

</html>