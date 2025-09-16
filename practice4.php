<!DOCTYPE html>
<html>
<head>
    <title>Practice 4 - Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 15px;
        }
	th {
    border: 1px solid #000;
    padding: 8px;
    text-align: center;
    background-color: #708238;  /* Olive green header background */
    color: white;               /* Header text color */
	}

	td {
    border: 1px solid #000;
    padding: 8px;
    text-align: center;
    background-color: #d4e4bc;  /* Light olive green cell background */
    color: #222;                /* Cell text color */
	}



    </style>
</head>
<body>

<h1>Multiplication Table Generator</h1>

<p>This page uses php in order to generate a multiplication table based on a given number.</p>

<form method="post">
    <label for="number">Enter a number (1–100):</label>
    <input type="number" name="number" id="number" min="1" max="100" required>
    <input type="submit" value="Generate Table">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["number"]);

    if ($n < 1 || $n > 100) {
        echo "<p>Please enter a number between 1 and 100.</p>";
    } else {
        echo "<h2>Multiplication Table (1 to $n)</h2>";
        echo "<table>";

        // Print header row
        echo "<tr><th>x</th>";
        for ($col = 1; $col <= $n; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";

        // Print rows
        for ($row = 1; $row <= $n; $row++) {
            echo "<tr><th>$row</th>";
            for ($col = 1; $col <= $n; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
}
?>

</body>
</html>
