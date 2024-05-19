<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// echo fgets($myfile) . "<br><br>";
// echo fread($myfile, filesize("webdictionary.txt"));

// while (!feof($myfile)) {
//     echo fgets($myfile) . "<br>";
// }

while (!feof($myfile)) {
    echo fgetc($myfile);
}
fclose($myfile);


// Note: After a call to the fgets() function, the file pointer has moved to the next line.
