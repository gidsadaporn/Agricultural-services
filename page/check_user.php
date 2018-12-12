<?php
require('../connect.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if( !isset($_SESSION['user_id']) && $title != 'login' && $title != 'register')
{
    header('Location: login.php');
}
?>