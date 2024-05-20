<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rectangle Area Calculation</title>
</head>
<body>
    <?php
    // Function to calculate the area of a rectangle
    function calculateArea($length, $width) {
        return $length * $width;
    }

    // Calling the function with sample values
    $length = 10;
    $width = 5;
    $area = calculateArea($length, $width);
    ?>

    <h1>Rectangle Area Calculation</h1>
    <p>Length: <?php echo htmlspecialchars($length); ?> units</p>
    <p>Width: <?php echo htmlspecialchars($width); ?> units</p>
    <p>Area: <?php echo htmlspecialchars($area); ?> square units</p>
</body>
</html>
