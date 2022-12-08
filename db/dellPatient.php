<?php
$id             = $_POST['del_form_id'];



// In the base page (directly accessed):

define('_DEFVAR', 1);
include('conn.php');
$sql = "DELETE FROM patient WHERE id=$id;";
if ($conn->query($sql) === TRUE) {
header('Location: ../index.php?p=backoffice&r=dellOk');
} else
header('Location: ../index.php?p=backoffice&r=dellError');
$conn->close();

