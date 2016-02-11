<?php
  // Load configuration as an array. Use the actual location of your configuration file
  $config = parse_ini_file('../../db_config.ini');

  // Try and connect to the database
  $host = $config['servername'];
  $dbname = $config['dbname'];
  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $config['username'], $config['password']);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
  }
  catch(PDOException $e)
  {
    echo "Connection failed: " . $e->getMessage();
  }
?>
