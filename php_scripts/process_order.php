<html>
<head>
  <title>Example From a Book I'm Working Through</title>
</head>
<body>
  <h1>Results</h1>
  <?php
    /*
      Author: Matt Joslin
    */
    $tires = $_POST['tireqty'];
    $oil = $_POST['oilqty'];
    $spark = $_POST['sparkqty'];
    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 50);

    echo "<p>Order processed.<br>";
    echo date('H:i, jS F Y');
    $tire_sub = $tires * TIREPRICE;
    $oil_sub = $oil * OILPRICE;
    $spark_sub = $spark * SPARKPRICE;
    $sub = $tire_sub + $oil_sub + $spark_sub;
    $taxrate = 0.10;
    $total = (1 + $taxrate) * $sub;
    echo "<br>" . $tires . " tires @ $" . number_format(TIREPRICE,2) . " = $" . number_format($tire_sub,2);
    echo "<br>" . $oil . " oil @ $" . number_format(OILPRICE,2) . " = $" . number_format($oil_sub,2);
    echo "<br>" . $spark . " spark @ $" . number_format(SPARKPRICE,2) . " = $" . number_format($spark_sub,2);
    echo "<br>" . "Subtotal = $" . number_format($sub,2);
    echo "<hr><br>" . "Total after tax = $" . number_format($total,2);
    echo "</p>";

   ?>
</body>
</html>
