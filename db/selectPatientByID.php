<?php
define('_DEFVAR', 1);
include('conn.php');

if(empty($_GET['id'])){
    header('Location: index.php?p=404');
    exit();
}
$id=$_GET['id'];
if(isset($_GET['p'])){
    if($_GET['p']=='details-patient'){
        $sql = "SELECT * FROM patient WHERE id=$id";
    //}else if($_GET['p']=='edit-patient'){
      //  $sql = "SELECT * FROM patient WHERE id=$id";
    }else{
        $sql = "SELECT * FROM patient WHERE visibility=1 AND id=$id";
    }
}else{
    $sql = "SELECT * FROM patient WHERE visibility=1 AND id=$id";
}
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
}else{
    header('Location: index.php?p=404');
    exit();
}

$conn->close();
?>