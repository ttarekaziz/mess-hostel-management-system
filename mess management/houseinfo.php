<?php

require 'connection.php';
$conn    = Connect();
$serial  = $conn->real_escape_string($_POST['serial_no']);
$h_name   = $conn->real_escape_string($_POST['house_name']);
$h_num     = $conn->real_escape_string($_POST['house_no']);
$address = $conn->real_escape_string($_POST['addr']);
$contact     = $conn->real_escape_string($_POST['contact']);

$query   = "INSERT into tb_house (serial_no,h_name,house_no,address,contact) VALUES('" . $serial . "','" . $h_name . "','" . $h_num . "','" . $address . "','" . $contact . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}


include 'houseinfo2.php';

$conn->close();

?>