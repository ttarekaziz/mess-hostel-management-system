<?php

require 'connection.php';
$conn    = Connect();
$serial  = $conn->real_escape_string($_POST['serial_no']);
$id  = $conn->real_escape_string($_POST['mem_id']);
$name     = $conn->real_escape_string($_POST['mem_name']);
$occupation    = $conn->real_escape_string($_POST['mem_occu']);
$per_adderss     = $conn->real_escape_string($_POST['per_add']);
$phon_num    = $conn->real_escape_string($_POST['phn_num']);
$email     = $conn->real_escape_string($_POST['email']);

$query   = "INSERT into tb_members (serial_no,id,name,occup,per_addr,phone_num,email) VALUES('" . $serial . "','" . $id . "','" . $name . "','" . $occupation . "','" . $per_adderss . "','" . $phon_num . "','" . $email . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

include 'meminfo2.php';

$conn->close();

?>