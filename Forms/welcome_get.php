<html>

<body style="color: wheat; background-color: black;">

    <form action="welcome_get.php" method="GET">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    Welcome <?php echo $_GET["name"]; ?><br>
    Your email address is: <?php echo $_GET["email"]; ?>

</body>

<!-- $_GET is an array of variables passed to the current script via the URL parameters.
GET may be used for sending non-sensitive data.
Note: GET should NEVER be used for sending passwords or other sensitive information!

$_POST is an array of variables passed to the current script via the HTTP POST method. 
Developers prefer POST for sending form data.-->

</html>