<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strict Keyword</title>
</head>

<body>
    <?php 
    // The strict declaration forces things to be used in the intended way.
    function addNumbers(int $a, int $b)
    {
        return $a + $b;
    }
    // echo addNumbers(5, "5 days");

    function addNumbers2(float $a, float $b): int
    {
        return (int)($a + $b);
    }
    echo addNumbers2(1.2, 5.2);

    ?>
</body>

</html>