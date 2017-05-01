<?php
# Case sensitive

echo "<b>Case sensitive</b>";
echo "<br>";
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

echo "<br><hr>";

# Not case sensitive
echo "<b>Not case sensitive</b>";
echo "<br>";
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;

echo "<br><hr>";

echo "<b>Constants are Global</b>";
echo "<br>";
define("GREETING_GLOBAL", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING_GLOBAL;
}
 
myTest();
?>