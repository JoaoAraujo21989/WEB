<?php

$id = $_POST['form-id'];


// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

$sql = "UPDATE `patient` SET visibility=0 WHERE id=$id";


if ($conn->query($sql) === TRUE)
    header('Location: ../index.php?p=dashboard&r=patientDell');

$conn->close();
