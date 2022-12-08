<?php
session_start();
if(empty($_SESSION['id']) || empty($_POST['form_User_first_name'] || empty($_POST['form_User_last_name']))){
    header('Location: ../index.php?p=account&r=empty');
    exit();
}
$id = $_SESSION['id'];

if(!empty($_POST['form_User_Password']))
    $password = $_POST['form_User_Password'];   

$firstName = $_POST['form_User_first_name'];
$lastName = $_POST['form_User_last_name'];
$postalCode = $_POST['form_User_postal_code'];
$parish = $_POST['form_User_parish'];
$address = $_POST['form_User_address'];
$district = $_POST['form_User_district'];
$municipality = $_POST['form_User_municipality'];
$phoneContact = $_POST['form_User_phone_contact'];


// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

if(!empty($_POST['form_User_Password']))  
    $sql = "UPDATE `user` SET 
        password=MD5('$password'),
        first_name='$firstName',
        last_name='$lastName',
        postal_code='$postalCode',
        parish='$parish',
        address='$address',
        district='$district',
        municipality='$municipality',
        phone_contact='$phoneContact'
            WHERE id=$id";

else
    $sql = "UPDATE `user` SET 
        first_name='$firstName',
        last_name='$lastName',
        postal_code='$postalCode',
        parish='$parish',
        address='$address',
        district='$district',
        municipality='$municipality',
        phone_contact='$phoneContact'
            WHERE id=$id";

//die($sql);

if ($conn->query($sql) === TRUE) {
    $_SESSION['id']=$id;
    header('Location: ../index.php?p=account&r=editok');
}
else
    header('Location: ../index.php?p=account&r=editerror');
$conn->close();
