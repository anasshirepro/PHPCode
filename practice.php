<?php

$name = "Anas Shire Abukar";
$age = 20;
// string iyo variable in leys dhex geliyo php normal, uma baahnid syntax gooni ah inaad qorto
$output = "My name is $name, I am $age years old";

echo "<h3 style = 'color: red'>String leteral using echo without additional syntax</h3>";
echo $output, "<br>";
echo "magaceygu waa $name da'deydu waa $age";
echo "<br>";

// in keysku dhajiyo 2 string value-ka ku jira
echo "<h3 style = 'color: green'>String concatination</h3>";
echo "Good " . "Morning " . $name;
echo "<br>";
echo "Galab " . "Wanaagsan " . $name;

$message = "Good Morning";
$fariin = "Galab wanaagsan";
echo "<br>";
//in lagu soo muujiyo caalamadahaan "" qeybta browser-ka, lana xisaabo xarfaha string-ga ku dhex jira
$browserString = ' " " ';
echo "<h3 style = 'color: blue'>How to ahow $browserString  in browser & counting string characters and words </h3>";

echo "The Length of this String \"$message\" is " . strlen($message);
echo "<br>";
echo "Dhirirka xarfaha ku jira string-gaan \"$fariin\"  waa " . strlen($fariin);

$message = "The Quick Brown Fox Jumps over the Lazy Dog";
echo "<br>";

echo "Total Words \"$message\" = " . str_word_count($message);
echo "<br>";
echo "wadarta ereyada ku jira string-gaan \"$fariin\" =". str_word_count($fariin);
echo "<br>";
// in string laga soo daawaco xaraf ka mid ah iyagoo la sheegayo lambarka booska uu ku fadhiyo
echo "<h3 style = 'color: orange'>printing 1 character in string using its Posituon number</h3>";

echo "The position [7] is " . $message[7];
echo "<br>";
echo "booska [5] ee string-gaan \"$fariin\" waa: " . $fariin[6];
echo "<br>";
echo "Search Word \"fox\" " . strpos($message, "word");
echo "<br>";

// echo strpos($message, "word");
echo "<h3 style = 'color: red'></h3>";

echo "Replace Dog to Cat: " . str_replace("Dog", "Cat", $message);

echo "<h3 style = 'color: red'></h3>";

define("PI", 3.14);
$radius = 6;
echo "<br>";
$area = PI * $radius * $radius;

echo "The Area of Circle: ", $area;


$age = 14;
echo "<br>";
($age > 18) ? print "Adult" : print "Child";
echo "<br>";
echo ($age > 18) ? "Adult" : "Child";


$x = 5;
$y = 4;
echo "<br>";
// echo $x++;
echo ++$x;


echo "<br>";
echo $x > $y ? "$x is greater $y" : "$x is less than $y";

echo "<br>";
echo "The result is ", 1 + 5 * 3 - (6/2) > 10 && 5 < 3 || !(6 < 8);





echo false;







?>