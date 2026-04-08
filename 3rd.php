<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>

<h2>String Manipulation Program</h2>

<form method="post">
    Enter a String: <input type="text" name="str" required>
    <br><br>
    <input type="submit" name="submit" value="Process">
</form>

<?php
if(isset($_POST['submit'])) {
    $str = $_POST['str'];

    echo "<h3>Results:</h3>";

    $length = strlen($str);
    echo "Length of string: " . $length . "<br>";

    $reverse = strrev($str);
    echo "Reversed String: " . $reverse . "<br>";

    $substring = substr($str, 0, 5);
    echo "Substring (first 5 characters): " . $substring . "<br>";

    $trimmed = trim($str);
    echo "Trimmed String: " . $trimmed . "<br>";

    $upper = strtoupper($str);
    echo "Lower to Upper: " . $upper . "<br>";

    $lower = strtolower($str);
    echo "Upper to Lower: " . $lower . "<br>";

}
?>
</body>
</html>