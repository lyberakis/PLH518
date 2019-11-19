<?php session_start();
      ob_start();
      include 'queries.php';?>
<html lang="en">
	<head>
		<title>Teacher</title>
                <link href="main.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
            <?php include 'includes/header.php'; ?>
            <?php include 'includes/navigation.php'; ?>   
            <center>
                <br/>
                Hello Dr.
                <?php 
                    if(isset($_SESSION["user"])){
                        echo $_SESSION["surname"];
                    }  else {
                        header("Location: index.php");
                    }
                ?>
            </center>
	</body>
</html>
<? ob_end_flush();?>