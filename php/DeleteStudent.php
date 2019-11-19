<?php include 'queries.php';
      session_start();
      ob_start();
      if(!isset($_SESSION["user"])){
        header("Location: index.php");
      }?>
<html lang="en">
	<head>
		<title>Delete</title>
                <link href="main.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
            <?php include 'includes/header.php'; ?>
            <?php include 'includes/navigation.php'; ?>    <br />
            <center>
                <form action="DeleteStudent.php" method="post">
                <table>
                    <tr><td><p class="thick">Enter Student ID for deletion:</p></td> <td><input type="text" name="id" value="" /></td></tr>
                </table>
                    <input type="submit" name="submit" value="Delete" />
                </form>
                <?php   
                if (isset($_POST['submit'])){
                    deleteStudent($_POST['id']);
                    echo "Student deleted succesfully.";
                }
                ?>
            </center>
	</body>
</html>
<? ob_end_flush();?>