<?php
if (empty($_POST['np_form_first_name']) || empty($_POST['np_form_last_name']) || empty($_POST['np_form_birth_date']) || empty($_POST['np_form_process_number']) || empty($_POST['np_form_niss'])) {
    header('Location: ../index.php?p=new-patient&r=empty');
    exit();
}
$firstName = $_POST['np_form_first_name'];
$lastName = $_POST['np_form_last_name'];
$birthDate = $_POST['np_form_birth_date'];
$processNumber = $_POST['np_form_process_number'];
$niss = $_POST['np_form_niss'];
$postalCode = $_POST['np_form_postal_code'];
$parish = $_POST['np_form_parish'];
$address = $_POST['np_form_address'];
$district = $_POST['np_form_district'];
$municipality = $_POST['np_form_municipality'];
$emailContact = $_POST['np_form_email_contact'];
$phoneContact = $_POST['np_form_phone_contact'];
$photo = $_FILES['np_form_photo_patient'];


// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

$sql = "INSERT INTO `patient` ( first_name,     last_name,      birth_date,     process_number,     niss,   postal_code,        parish,     `address`,    district,   municipality,   email_contact,  phone_contact) 
                    VALUES (   '$firstName',  '$lastName',     '$birthDate',   '$processNumber',   $niss, '$postalCode',       '$parish',  '$address', '$district','$municipality','$emailContact','$phoneContact')";


if ($conn->query($sql) === TRUE) {
    //RETORNA ID DO ULTIMO ELEMENTO INSERIDO
    $id = $conn->insert_id;

    if (!empty($_FILES["np_form_photo_patient"]["tmp_name"])) {
        $sql1 = "UPDATE `patient` SET photo='p$id.png' WHERE id=$id";
        $conn->query($sql1);
        include('uploadImgPatient.php');
    }

    header('Location: ../index.php?p=dashboard&r=new-patientok');

} else
    header('Location: ../index.php?p=new-patient&r=new-patienterror');
$conn->close();
