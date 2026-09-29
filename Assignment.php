
<?php


// 1. Greatest and Smallest of Three Numbers


$num1 = 25;
$num2 = 10;
$num3 = 40;

$greatest = $num1;
$smallest = $num1;

if ($num2 > $greatest) {
    $greatest = $num2;
}

if ($num3 > $greatest) {
    $greatest = $num3;
}

if ($num2 < $smallest) {
    $smallest = $num2;
}

if ($num3 < $smallest) {
    $smallest = $num3;
}

echo "<h3>1. Greatest and Smallest</h3>";
echo "Greatest: $greatest<br>";
echo "Smallest: $smallest<br>";



// 2. Divisible by 3, 5, Both, or None


$num = 15;

echo "<h3>2. Divisibility Check</h3>";

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "$num is divisible by both 3 and 5.<br>";
}
elseif ($num % 3 == 0) {
    echo "$num is divisible by 3.<br>";
}
elseif ($num % 5 == 0) {
    echo "$num is divisible by 5.<br>";
}
else {
    echo "$num is divisible by neither 3 nor 5.<br>";
}



// 3. Odd Numbers from 2 to 20


echo "<h3>3. Odd Numbers from 2 to 20</h3>";

for ($i = 2; $i <= 20; $i++) {

    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br>";


// Even Numbers from 35 to 7

echo "<h3>Even Numbers from 35 to 7</h3>";

for ($i = 35; $i >= 7; $i--) {

    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

echo "<br>";



// 4. Numbers Divisible by 2 and 5


echo "<h3>4. Numbers Divisible by 2 and 5 from 50 to 2</h3>";

for ($i = 50; $i >= 2; $i--) {

    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}

echo "<br>";



// 5. Reverse of a Given Number


$num = 12345;
$reverse = 0;
$original = $num;

while ($num > 0) {

    $digit = $num % 10;

    $reverse = ($reverse * 10) + $digit;

    $num = (int)($num / 10);
}

echo "<h3>5. Reverse of a Number</h3>";
echo "Original Number: $original<br>";
echo "Reverse Number: $reverse<br>";



// 6. LCM of Two Positive Integers


$num1 = 8;
$num2 = 12;

if ($num1 > $num2) {
    $lcm = $num1;
}
else {
    $lcm = $num2;
}

while (true) {

    if ($lcm % $num1 == 0 && $lcm % $num2 == 0) {
        break;
    }

    $lcm++;
}

echo "<h3>6. LCM</h3>";
echo "LCM of $num1 and $num2 is: $lcm<br>";



// 7. HCF of Two Integer Numbers


$num1 = 18;
$num2 = 24;

$hcf = 1;

for ($i = 1; $i <= $num1 && $i <= $num2; $i++) {

    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i;
    }
}

echo "<h3>7. HCF</h3>";
echo "HCF of $num1 and $num2 is: $hcf<br>";



// 8. Multiplication Table up to 12 x 12


echo "<h3>8. Multiplication Table</h3>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";

for ($i = 1; $i <= 12; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {

        echo "<td>";
        echo $i * $j;
        echo "</td>";
    }

    echo "</tr>";
}

echo "</table>";


// 9. Prime or Non-Prime


$num = 17;
$isPrime = true;

if ($num < 2) {

    $isPrime = false;

}
else {

    for ($i = 2; $i < $num; $i++) {

        if ($num % $i == 0) {

            $isPrime = false;
            break;
        }
    }
}

echo "<h3>9. Prime or Non-Prime</h3>";

if ($isPrime) {
    echo "$num is a prime number.<br>";
}
else {
    echo "$num is a non-prime number.<br>";
}



// 10. Prime Numbers from 10 to 50


echo "<h3>10. Prime Numbers from 10 to 50</h3>";

for ($num = 10; $num <= 50; $num++) {

    $isPrime = true;

    if ($num < 2) {

        $isPrime = false;

    }
    else {

        for ($i = 2; $i < $num; $i++) {

            if ($num % $i == 0) {

                $isPrime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo $num . " ";
    }
}

?>

