<?php session_start();
    ob_start();
    
    if(!isset($_SESSION["user"]))
       header("Location: index.php");

    $_SESSION["user"]=null;
    $_SESSION["name"]=null;
    $_SESSION["surname"]=null;
    header("Location: index.php");

    ob_end_flush();?>