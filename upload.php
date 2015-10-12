<!DOCTYPE html>
<html lang="en">
<head>
  <link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/bootstrap-theme.css" rel="stylesheet">

  <!-- siimple style -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body   >
<div id="wrapper">
<?php

$name = $_GET["emailG"];



$conn =  mysql_connect("mysql4.000webhost.com", "a6041226_user", "soonuser1");
mysql_select_db("a6041226_soon",$conn);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = mysql_real_escape_string($name);
$sql="INSERT INTO email VALUES('$name')";
mysql_query($sql) or die ('Error SQL ! '.$sql.'<br/>'.mysql_error());

?>
<h1>Thank you!</h1>
<h2 class="subtitle">We will get back to you ASAP!</h2>
</div>
</body>
<html>
