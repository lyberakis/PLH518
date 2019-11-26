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
                    if(isset($row)){?>
                    <table>
                        <tr><td><p class="thick"><?php echo "ID:"?></p></td> <td><?php echo $row['id'];?></td></tr>
                        <tr><td><p class="thick"><?php echo "Name:"?></p></td> <td><?php echo $row['name'];?></td></tr>
                        <tr><td><p class="thick"><?php echo "Surname:"?></p></td> <td><?php echo $row['surname'];?></td></tr>
                        <tr><td><p class="thick"><?php echo "Father name:"?></p></td> <td><?php echo $row['fathername'];?></td></tr>
                        <tr><td><p class="thick"><?php echo "Grade:"?></p></td> <td><?php echo $row['grade'];?></td></tr>
                        <tr><td><p class="thick"><?php echo "Phone Number:"?></p></td> <td><?php echo $row['mobilenumber'];?></td></tr>
                        <tr><td><p class="thick"><?php echo "Date of Birth:"?></p></td> <td><?php echo date("d-m-Y", strtotime($row['birthday']));?></td></tr>
                    </table>
            <?php   }else{
                        echo "Sorry, no such student exists.";
                    }
                }
                ?>
            </center>
	</body>
</html>
<? ob_end_flush();?>