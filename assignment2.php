<?php


echo "<h1>Week Three - Assignment 2</h1>";



echo "<h2>Question 1: One-Dimensional Array</h2>";

$array1 = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

/* 1 & 2. Print all elements */
echo "<h3>All Elements:</h3>";
echo "<pre>";
print_r($array1);
echo "</pre>";

/* 3. Total of all elements */
$total = array_sum($array1);
echo "Total of all elements: $total<br>";

/* 4. Total of even elements */
$evenTotal = 0;

/* 5. Total of odd elements */
$oddTotal = 0;

foreach ($array1 as $value) {
    if ($value % 2 == 0) {
        $evenTotal += $value;
    } else {
        $oddTotal += $value;
    }
}

echo "Total of even elements: $evenTotal<br>";
echo "Total of odd elements: $oddTotal<br>";

/* 6. Minimum element and its positions */
$min = min($array1);
$minPositions = [];

foreach ($array1 as $index => $value) {
    if ($value == $min) {
        $minPositions[] = $index;
    }
}

echo "Minimum element: $min<br>";
echo "Minimum element positions (array index): " . implode(", ", $minPositions) . "<br>";

/* 7. Maximum element and its positions */
$max = max($array1);
$maxPositions = [];

foreach ($array1 as $index => $value) {
    if ($value == $max) {
        $maxPositions[] = $index;
    }
}

echo "Maximum element: $max<br>";
echo "Maximum element positions (array index): " . implode(", ", $maxPositions) . "<br>";


/* =========================================================
   QUESTION 2
   Two-dimensional associative array
   ========================================================= */

echo "<hr>";
echo "<h2>Question 2: Two-Dimensional Associative Array</h2>";

$array2 = [
    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],
    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],
    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]
];

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($array2 as $rowName => $columns) {
    echo "<tr>";
    echo "<th>$rowName</th>";

    foreach ($columns as $value) {
        echo "<td>$value</td>";
    }

    echo "</tr>";
}

echo "</table>";


/* =========================================================
   QUESTION 3
   Two-dimensional square array
   ========================================================= */

echo "<hr>";
echo "<h2>Question 3: Two-Dimensional Square Array</h2>";

$array3 = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

/* 1 & 2. Declare and print all elements */
echo "<h3>Array Elements:</h3>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";

foreach ($array3 as $row) {
    echo "<tr>";

    foreach ($row as $value) {
        echo "<td>$value</td>";
    }

    echo "</tr>";
}

echo "</table>";

/* 3. Total of odd elements */
$oddTotal3 = 0;

/* 4. Total of even elements */
$evenTotal3 = 0;

/* 5. Total of each row */
$rowTotals = [];

/* 6. Total of each column */
$columnTotals = [0, 0, 0];

/* 8. Total of all elements */
$grandTotal = 0;

foreach ($array3 as $rowIndex => $row) {
    $rowTotal = 0;

    foreach ($row as $columnIndex => $value) {

        if ($value % 2 == 0) {
            $evenTotal3 += $value;
        } else {
            $oddTotal3 += $value;
        }

        $rowTotal += $value;
        $columnTotals[$columnIndex] += $value;
        $grandTotal += $value;
    }

    $rowTotals[$rowIndex] = $rowTotal;
}

echo "<br>";
echo "Total of odd elements: $oddTotal3<br>";
echo "Total of even elements: $evenTotal3<br>";

/* 5. Print total of each row */
echo "<h3>Total of Each Row:</h3>";

foreach ($rowTotals as $index => $totalRow) {
    echo "Row " . ($index + 1) . ": $totalRow<br>";
}

/* 6. Print total of each column */
echo "<h3>Total of Each Column:</h3>";

foreach ($columnTotals as $index => $totalColumn) {
    echo "Column " . ($index + 1) . ": $totalColumn<br>";
}

/* 7. Total of each diagonal */
$mainDiagonalTotal = 0;
$secondaryDiagonalTotal = 0;

for ($i = 0; $i < count($array3); $i++) {
    $mainDiagonalTotal += $array3[$i][$i];

    $secondaryDiagonalTotal +=
        $array3[$i][count($array3) - 1 - $i];
}

echo "<h3>Diagonal Totals:</h3>";
echo "Main diagonal total: $mainDiagonalTotal<br>";
echo "Secondary diagonal total: $secondaryDiagonalTotal<br>";

/* 8. Total of all elements */
echo "Total of all elements: $grandTotal<br>";

/* 9. Minimum element and positions */
$min3 = $array3[0][0];
$min3Positions = [];

foreach ($array3 as $rowIndex => $row) {
    foreach ($row as $columnIndex => $value) {

        if ($value < $min3) {
            $min3 = $value;
            $min3Positions = [
                "Row " . ($rowIndex + 1) . ", Column " . ($columnIndex + 1)
            ];
        } elseif ($value == $min3) {
            $min3Positions[] =
                "Row " . ($rowIndex + 1) . ", Column " . ($columnIndex + 1);
        }
    }
}

echo "Minimum element: $min3<br>";
echo "Minimum positions: " . implode("; ", $min3Positions) . "<br>";

/* 10. Maximum element and positions */
$max3 = $array3[0][0];
$max3Positions = [];

foreach ($array3 as $rowIndex => $row) {
    foreach ($row as $columnIndex => $value) {

        if ($value > $max3) {
            $max3 = $value;
            $max3Positions = [
                "Row " . ($rowIndex + 1) . ", Column " . ($columnIndex + 1)
            ];
        } elseif ($value == $max3) {
            $max3Positions[] =
                "Row " . ($rowIndex + 1) . ", Column " . ($columnIndex + 1);
        }
    }
}

echo "Maximum element: $max3<br>";
echo "Maximum positions: " . implode("; ", $max3Positions) . "<br>";


/* =========================================================
   QUESTION 4
   Two-dimensional associative array
   ========================================================= */

echo "<hr>";
echo "<h2>Question 4: Student Information Associative Array</h2>";

/*
   The table in the assignment contains the row IDs:
   CA221, CA223, and CA221.
   The same row name CA221 appears twice in the source table,
   so unique PHP keys are used to preserve both records.
*/

$array4 = [
    "CA221-1" => [
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ],
    "CA223" => [
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ],
    "CA221-2" => [
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    ]
];

echo "<table border='1' cellpadding='8' cellspacing='0'>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($array4 as $id => $student) {
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>{$student['Name']}</td>";
    echo "<td>{$student['Phone']}</td>";
    echo "<td>{$student['Address']}</td>";
    echo "</tr>";
}

echo "</table>";


/* =========================================================
   QUESTION 5
   Student transcript based on semesters
   ========================================================= */

echo "<hr>";
echo "<h2>Question 5: Student Transcript</h2>";

$transcript = [
    "Semester 1" => [
        "subject1" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],
        "subject2" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],
        "subject3" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]
    ],

    "Semester 2" => [
        "subject1" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0,
            "Total" => 45,
            "Status" => "Fail"
        ],
        "subject2" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],
        "subject3" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]
    ]
];

foreach ($transcript as $semester => $subjects) {

    echo "<h3>$semester</h3>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";

    echo "<tr>";
    echo "<th>Course</th>";
    echo "<th>CW1</th>";
    echo "<th>MidTerm</th>";
    echo "<th>CW2</th>";
    echo "<th>Final</th>";
    echo "<th>Total</th>";
    echo "<th>Status</th>";
    echo "</tr>";

    foreach ($subjects as $subject => $marks) {

        echo "<tr>";
        echo "<td>$subject</td>";
        echo "<td>{$marks['CW1']}</td>";
        echo "<td>{$marks['MidTerm']}</td>";
        echo "<td>{$marks['CW2']}</td>";
        echo "<td>{$marks['Final']}</td>";
        echo "<td>{$marks['Total']}</td>";
        echo "<td>{$marks['Status']}</td>";
        echo "</tr>";
    }

    echo "</table>";
}

echo "<hr>";
echo "<p><strong>End of Assignment</strong></p>";

?>
