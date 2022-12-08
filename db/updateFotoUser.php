<?php
if(empty($_SESSION['id'])){
    header('Location: ../index.php?p=account&r=empty');
    exit();
}
$id = $_SESSION['id'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

$sql = "UPDATE `user` SET photo='u$id.png' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../index.php?p=account&r=editok');
}
else
    header('Location: ../index.php?p=account&r=editerror');
$conn->close();
?>