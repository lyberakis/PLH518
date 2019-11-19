<?php include 'queries.php';
      session_start();
      ob_start();
      if(!isset($_SESSION["user"])){
        header("Location: index.php");
      }?>
<html lang="en">
	<head>
		<title>Search</title>
                <link href="main.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
            <?php include 'includes/header.php'; ?>
            <?php include 'includes/navigation.php'; ?>    <br />
            <center>
                <form action="SearchStudent.php" method="post">
                <table>
                    <tr><td><p class="thick">Enter Student ID:</p></td> <td><input type="text" name="id" value="" /></td></tr>
                </table>
                    <input type="submit" name="submit" value="Search" />
                </form>
                <?php   
                if (isset($_POST['submit'])){
                    $row=searchStudent($_POST['id']);
                    if(isset($row)){
                        echo "ID: ".$row['id']."<br /><br />";
                        echo "Name: ".$row['name']."<br /><br />";
                        echo "Surname: ".$row['surname']."<br /><br />";
                        echo "Father name: ".$row['fathername']."<br /><br />";
                        echo "Grade: ".$row['grade']."<br /><br />";
                        echo "Phone Number: ".$row['mobilenumber']."<br /><br />";
                        echo "Date of Birth: ".date("d-m-Y", strtotime($row['birthday']))."<br /><br />";
                    }else{
                        echo "Sorry, no such student exists.";
                    }
                }
                ?>
            </center>
	</body>
</html>
<? ob_end_flush();?>