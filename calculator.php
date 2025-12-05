<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $expression = $_POST["expression"];

    // Remove illegal characters for safety
    $expression = preg_replace("/[^0-9+\-.*\/()]/", "", $expression);

    try {
        // Evaluate expression safely
        $result = eval("return $expression;");
        echo "<h2 style='text-align:center;'>Result: $result</h2>";
    } catch (Throwable $e) {
        echo "<h2 style='color:red; text-align:center;'>Invalid Expression</h2>";
    }

    echo "<div style='text-align:center; margin-top:20px;'>
            <a href='index.html' style='font-size:20px;'>Go Back</a>
          </div>";
}
?>
