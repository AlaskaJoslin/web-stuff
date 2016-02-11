<?php
   echo "Script Called";
   //$listings = $_REQUEST["q"];
   $listings = "";
   if ($listings == "") {
      $listings = "*";
   }

  // Load configuration as an array. Use the actual location of your configuration file
  $config = parse_ini_file('../../db_config.ini');

  // Try and connect to the database
  $host = $config['servername'];
  $dbname = $config['dbname'];
  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $config['username'], $config['password']);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ID, Category, Property_type, short_title, description, address, city, area, zip, mls, bedrooms, bathrooms, square_feet, list_price, garage_spaces, lot_size, year_built, stories, clicks, num_photos FROM joslin_listings"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    print_r($result);
  }
  catch(PDOException $e)
  {
    echo "Connection failed: " . $e->getMessage();
  }
     
  $conn = null;
  echo "</table>";
?>
