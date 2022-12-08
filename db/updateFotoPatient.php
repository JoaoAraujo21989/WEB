<?php

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

$sql = "UPDATE patient SET photo='p$id.png' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../index.php?p=patient&r=editok');
}
else
    header('Location: ../index.php?p=patient&r=editerror');
$conn->close();
?>