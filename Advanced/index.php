<html>

<body>

<!-- Use require when the file is required by the application.

Use include when the file is not required and application should continue when file is not found. -->

    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>

    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Some more text.</p>

    <?php include 'vars.php';
    echo "I have a $color $car." . "<br>";
    ?>

    <?php require 'noFileExists.php';
    echo "I have a $color $car.";
    ?>

    <?php include 'footer.php'; ?>

</body>

</html>