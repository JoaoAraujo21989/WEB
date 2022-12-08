<?php
if (empty($_POST['np_form_first_name']) || empty($_POST['np_form_last_name']) || empty($_POST['np_form_birth_date']) || empty($_POST['np_form_process_number']) || empty($_POST['np_form_niss'])) {
    header('Location: ../index.php?p=patient&r=empty');
    exit();
}

$id             = $_POST['np_form_id'];
$firstName      = $_POST['np_form_first_name'];
$lastName       = $_POST['np_form_last_name'];
$birthDate      = $_POST['np_form_birth_date'];
$processNumber  = $_POST['np_form_process_number'];
$niss           = $_POST['np_form_niss'];
$postalCode     = $_POST['np_form_postal_code'];
$parish         = $_POST['np_form_parish'];
$address        = $_POST['np_form_address'];
$district       = $_POST['np_form_district'];
$municipality   = $_POST['np_form_municipality'];
$emailContact   = $_POST['np_form_email_contact'];
$phoneContact   = $_POST['np_form_phone_contact'];
$photo          = $_FILES['np_form_photo_patient'];

// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

$tempImg = $_FILES["np_form_photo_patient"]["tmp_name"];

if(empty($tempImg)){
    $sql = "UPDATE  `patient` SET
        first_name      ='$firstName',
        last_name       ='$lastName',
        birth_date      ='$birthDate',
        process_number  =$processNumber,     
        niss            =$niss,   
        postal_code     ='$postalCode',        
        parish          ='$parish',     
        address         ='$address',    
        district        ='$district',   
        municipality    ='$municipality',   
        email_contact   ='$emailContact',  
        phone_contact   ='$phoneContact'
    where id=$id";  
}else{
    $sql = "UPDATE  `patient` SET
        first_name      ='$firstName',
        last_name       ='$lastName',
        birth_date      ='$birthDate',
        process_number  =$processNumber,     
        niss            =$niss,   
        postal_code     ='$postalCode',        
        parish          ='$parish',     
        address         ='$address',    
        district        ='$district',   
        municipality    ='$municipality',   
        email_contact   ='$emailContact',  
        phone_contact   ='$phoneContact',
        photo           ='p$id.png'
    where id=$id";  
    include('uploadImgPatient.php');
    
}
if ($conn->query($sql) === TRUE) {      
    header('Location: ../index.php?p=dashboard&r=new-patientok');
} else
    header('Location: ../index.php?p=edit-patient&r=edit-patientError');
$conn->close();
?>