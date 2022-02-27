<?php
    session_start();
    session_unset();       //removes all session variables
    session_destroy();
    header('location:../index.php?lout=true');
?>