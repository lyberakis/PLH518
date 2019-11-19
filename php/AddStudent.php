<?php include 'queries.php';
      session_start();
      ob_start();
      if(!isset($_SESSION["user"])){
        header("Location: index.php");
      }?>
<html lang="en">
	<head>
		<title>Add</title>
                <link href="main.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
            <?php include 'includes/header.php'; ?>
            <?php include 'includes/navigation.php'; ?>    <br />
            <center>
                <form action="AddStudent.php" method="post">
                <table>
                    <tr><td><p class="thick">ID:</p></td> <td><input type="text" name="id" value="" /></td></tr>
                    <tr><td><p class="thick">Name:</p></td> <td><input type="text" name="name" value="" /></td></tr>
                    <tr><td><p class="thick">Surname:</p></td> <td><input type="text" name="surname" value="" /></td></tr>
                    <tr><td><p class="thick">Father Name:</p></td> <td><input type="text" name="fathername" value=""/></td></tr>
                    <tr><td><p class="thick">Grade:</p></td> <td><input type="number" step=0.01 name="grade" value="" /></td></tr>
                    <tr><td><p class="thick">Phone Number:</p></td> <td><input type="text" name="mobilenumber" value="" /></td></tr>
                    <tr><td><p class="thick">Date of birth:</p></td> <td><input type="date" name="birth" max="<?php echo date('Y-m-d', strtotime("-1 days")); ?>"/></td></tr>
                </table>
                    <input type="submit" name="submit" value="Add" />
                </form>
                <?php   
                if (isset($_POST['submit'])){
                    if (intval(strlen($_POST['mobilenumber'])==10))
                        createStudent();
                    else
                        echo "Please enter a phone number with 10 digits.";
                }
                ?>
            </center>
	</body>
</html>
<? ob_end_flush();?>
