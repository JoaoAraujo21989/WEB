<?php
    if(isset($_GET['p'])){
        $p = $_GET['p'];
        if($p == 'home')
            include('content/pages/home.php');
        else if($p == 'login')
            include('content/pages/login.php');
        else if($p == 'logout')
            include('content/pages/logout.php');
        else if($p == 'account')
            include('content/pages/account.php');
        else if($p == 'backoffice')
            include('content/pages/backoffice.php');
        else if($p == 'dashboard')
            include('content/pages/dashboard.php');
        else if($p == 'patient')
            include('content/pages/patient.php');
        else if($p == 'register')
            include('content/pages/register.php');
        else if($p == 'details-patient')
            include('content/pages/details-patient.php');
        else if($p == 'delete-patient')
            include('content/pages/delete-patient.php'); 
        else
            include('content/pages/404.php');
    }else if(isset($_GET['search'])){
        include('content/pages/dashboard.php');
    } else
        include('content/pages/home.php');
?>