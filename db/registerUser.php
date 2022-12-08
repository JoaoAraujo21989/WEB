<?php



if(empty($_POST['nu_form_first_name']) || empty($_POST['nu_form_last_name']) || empty($_POST['nu_form_email']) || empty($_POST['nu_form_type_user'])){
    header('Location: ../index.php?p=register&r=empty');
    exit();
}

$firstName = $_POST['nu_form_first_name'];
$lastName = $_POST['nu_form_last_name'];
$emailUser = $_POST['nu_form_email'];
$userType = $_POST['nu_form_type_user'];
$passwordUser = generateRandomString();

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//die($password);


// In the base page (directly accessed):
define('_DEFVAR', 1);
include('conn.php');

$sql = "INSERT INTO `user` (first_name,last_name,email,password,usertype_id) 
                VALUES ('$firstName','$lastName','$emailUser',MD5('$passwordUser'),$userType)";


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.sapo.pt';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'csbairro@sapo.pt';                     //SMTP username
    $mail->Password   = 'P4ssw0rd+';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('csbairro@sapo.pt', 'Admin');
    $mail->addAddress($emailUser);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperação de password';
    $novaPass = generateRandomString();
    $mail->Body    = 'Ol&aacute; 
    Acabamos de criar um conta para permitir o seu acesso, com as seguintes credenciais:
    Password:'.$passwordUser;
    

    $mail->AltBody = 'Olá 
    Acabamos de criar um conta para permitir o seu acesso, com as seguintes credenciais:
    Password: '.$passwordUser;
    
    
    'Nota: Deve alterar a password aquando do seu primeiro login.
    Obrigado';

    $mail->send();




header('Location: ../index.php?p=register&r=regOk');
}
catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header('Location:../index.php?p=register&res=erro');
}


if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=backoffice&r=regOk');
} else {
    header('Location:../index.php?p=register&r=emailexistente');
}

$conn->close();
?>



