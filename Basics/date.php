<!DOCTYPE html>
<html>

<body>

    <?php
    $t = date("H");
    echo $t;
    echo "<br>";

    if ($t < "8") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    ?>

</body>

</html>