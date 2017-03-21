<?php
session_start();
if (isset($_REQUEST['doSubmit'])){
    if (isset($_REQUEST['name']) && $_REQUEST['name'] == '3'
        && isset($_REQUEST['password']) && $_REQUEST['password'] == '3'){
//        print 'login success';
        unset($_SESSION['error']);
        header('Location: admin.php');
    }
    else{
        header('Location: '.$_SERVER['HTTP_REFERER']);
        $_SESSION['error'] = 1;
    }
}