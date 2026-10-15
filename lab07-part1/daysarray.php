<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Using PHP Variables, arrays and operators</title>
    <!-- add other meta -->
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
<?php
    // english days
    $days = array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "<p>The days of the week in English are:<br>";
    echo "$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].</p>";

    // french days
    $days = array ("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    echo "<p>The days of the week in French are:<br>";
    echo "$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].</p>";
?>
</body>
</html>