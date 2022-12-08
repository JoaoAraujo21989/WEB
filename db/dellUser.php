<?php
$id             = $_POST['del_user_form_id'];



// In the base page (directly accessed):

define('_DEFVAR', 1);
include('conn.php');
$sql = "DELETE FROM user WHERE id=$id;";
if ($conn->query($sql) === TRUE) {
header('Location: ../index.php?p=backoffice&r=dellUserOk');
} else
header('Location: ../index.php?p=backoffice&r=dellUserError');
$conn->close();

