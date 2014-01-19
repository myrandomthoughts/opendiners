<?php

$conn = mysql_connect("localhost", "root", "root") or die(mysql_error());
mysql_select_db("opendiners", $conn) or die(mysql_error());


$day = '01';
$month = '10';
$year = '2014';

$date = $year.'/'.$month.'/'.$day;


if (!$date) {
    $e = date_get_last_errors();
    foreach ($e['errors'] as $error) {
        echo "$error\n";
    }
    exit(1);
}

$master_id = 3;
$location = "gas";
$address = "water street";
$price = 50;
$menu = "beef";

//add event details to events table
$add_master_sql = "insert into events (master_id, date_added, date_modified, date, location_neighbourhood, address, price, menu) VALUES ('".$master_id."', now(), now(), '".$date."', '".$location."', '".$address."', '".$price."', '".$menu."')";
$add_master_res = mysql_query($add_master_sql, $conn) or die(mysql_error($conn));


?>