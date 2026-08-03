<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
</head>
<body>

<h2>Electricity Bill Calculator</h2>

<form method="POST">
    Enter Units Consumed:
    <input type="number" name="units" required>
    <input type="submit" value="Calculate Bill">
</form>

<?php
if (isset($_POST['units'])) {

    $units = $_POST['units'];
    $bill_amt = 0;

    if ($units <= 100) {
        $bill_amt = $units * 5;
    }
    elseif ($units <= 200) {
        $bill_amt = (100 * 5) + (($units - 100) * 10);
    }
    elseif ($units <= 300) {
        $bill_amt = (100 * 5) + (100 * 10) + (($units - 200) * 15);
    }
    else {
        $bill_amt = (100 * 5) + (100 * 10) + (100 * 15) + (($units - 300) * 20);
    }

    echo "<h3>Units Consumed: $units</h3>";
    echo "<h3>Total Electricity Bill: ₹$bill_amt</h3>";
}
?>

</body>
</html>