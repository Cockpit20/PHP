<?php
$str = "<h1>Hello World!</h1>";
$newstr = strip_tags($str);
echo $newstr . "<br>";


$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo ("Integer is valid<br>");
} else {
    echo ("Integer is not valid<br>");
}

$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo ("$ip is a valid IP address<br>");
} else {
    echo ("$ip is not a valid IP address<br>");
}

$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo ("$email is a valid email address<br>");
} else {
    echo ("$email is not a valid email address<br>");
}

$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo ("$url is a valid URL");
} else {
    echo ("$url is not a valid URL");
}
