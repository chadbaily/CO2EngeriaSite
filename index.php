<?php
if( $_POST )
{
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("co2_meter", $con);

  $co2_reading = $_GET['co2'];

  $co2_reading = mysql_real_escape_string($co2_reading);

  $query = "
  INSERT INTO `engeria`(`co2`) VALUES ('$co2_reading');";

  mysql_query($query);

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($con);
}
?>