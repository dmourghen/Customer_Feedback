<?php

include 'connection.php';


$Num="Num";
$rating1="rating1";
$rating2="rating2";
$rating3="rating3";



$connect->query("insert into rate (num,rating1,rating2,rating3) 
VALUES
 ('[$Num]','[$rating1]','[$rating2]','[$rating3]');")

?>
