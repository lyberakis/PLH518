<?php include 'queries.php'; 
    session_start();
    ob_start();
    if(isset($_SESSION["user"]))
      header("Location: Teacher.php");?>
<html lang="en">
    <head>
		<title>Login</title>
            <link href="main.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
        <?php include 'includes/header.php'; ?>
        <?php include 'includes/navigation.php'; ?><br />
        <center>
            <form action="index.php" method="post">
            <table>
                <tr><td><p class="thick">Username:</p></td> <td><input type="text" name="username" value="" /></td></tr>
                <tr><td><p class="thick">Password:</p></td> <td><input type="password" name="password" value="" /></td></tr>
            </table>
                <input type="submit" name="submit" value="Submit" /><br /> <br />
            </form>
                <?php
                    if (isset($_POST['submit'])){
                        if(checkLoginInfo()==true){
                            $_SESSION["user"]=trim($_POST["username"]);
                            $fullName=findFullNameByUsername($_SESSION["user"]);
                            $_SESSION["name"]=$fullName["name"];
                            $_SESSION["surname"]=$fullName["surname"];
                            header("Location: Teacher.php");
                        }
                    }
                ?>
        </center>
	</body>
</html>
<? ob_end_flush();?>