<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Rohirrim Booking Confirmation" />
    <meta name="keywords" content="MiddleEarth, Tours, Rohan, Confirmation" />
    <meta name="author" content="Md Jahin Sadik" />
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
<?php
    // Extract form values safely using isset() and $_POST
    if (isset($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
    } else {
        echo "<p>Error: Please enter data in the <a href=\"register.html\">form</a></p>";
        exit();
    }

    if (isset($_POST["lastname"])) {
        $lastname = $_POST["lastname"];
    } else {
        $lastname = "";
    }

    if (isset($_POST["age"])) {
        $age = $_POST["age"];
    } else {
        $age = "";
    }

    if (isset($_POST["food"])) {
        $food = $_POST["food"];
    } else {
        $food = "none";
    }

    if (isset($_POST["partysize"])) {
        $partysize = $_POST["partysize"];
    } else {
        $partysize = "";
    }

    // Check which species radio button was selected
    $species = "Unknown";
    if (isset($_POST["species"])) {
        if ($_POST["species"] == "M") {
            $species = "Human";
        } elseif ($_POST["species"] == "D") {
            $species = "Dwarf";
        } elseif ($_POST["species"] == "E") {
            $species = "Elf";
        } elseif ($_POST["species"] == "H") {
            $species = "Hobbit";
        }
    }

    // Check which booking checkboxes were ticked
    $tour = "";
    if (isset($_POST["accom"])) {
        $tour = $tour . "Accommodation";
    }
    if (isset($_POST["4day"])) {
        if ($tour != "") {
            $tour = $tour . " and ";
        }
        $tour = $tour . "Four-day tour";
    }
    if (isset($_POST["10day"])) {
        if ($tour != "") {
            $tour = $tour . " and ";
        }
        $tour = $tour . "Ten-day tour";
    }
    if ($tour == "") {
        $tour = "No tour selected";
    }

    // Display the booking confirmation matching the lab screenshot
    echo "<p>Welcome $firstname $lastname !<br />";
    echo "You are now booked on the $tour<br />";
    echo "Species: $species<br />";
    echo "Age: $age<br />";
    echo "Meal Preference: $food<br />";
    echo "Number of travellers: $partysize</p>";
?>
</body>
</html>