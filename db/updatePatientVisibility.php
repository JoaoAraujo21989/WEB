<?php


$id             = $_POST['np_form_id'];


// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');



if(($_POST["np_form_visibility"] == 1)){
    $sql = "UPDATE  `patient` SET
        visibility = 0 
    where id=$id";  
}else{
    $sql = "UPDATE  `patient` SET
        visibility = 1 
    where id=$id";  

}

if ($conn->query($sql) === TRUE) {      
    header('Location: ../index.php?p=backoffice&r=visibilityOk');
} else
    header('Location: ../index.php?p=backoffice&r=visibilityError');
$conn->close();
?>