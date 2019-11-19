<?php include 'queries.php';
      session_start();
      ob_start();
      if(!isset($_SESSION["user"])){
        header("Location: index.php");
      }?>
<html lang="en">
	<head>
		<title>Edit</title>
                <link href="main.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
            <?php include 'includes/header.php'; ?>
            <?php include 'includes/navigation.php'; ?>    <br />
            
            <center>
          <?php if(!isset($_COOKIE["id"])){?>
                    <form action="EditStudent.php" method="post">
                    <table>
                        <tr><td><p class="thick">Enter Student ID to modify:</p></td> <td><input type="text" name="id" value="" /></td></tr>
                    </table>
                        <input type="submit" name="submit" value="Search" />
                    </form>
              <?php if (isset($_POST['submit'])){
                        setcookie("id", $_POST["id"], time()+60*60);
                        header("Location: EditStudent.php");
                    }
                }else{
                    $results=searchStudent($_COOKIE["id"]);
                    if(!isset($results)){
                        setcookie("id", null, time()+60*60);
                        header("Location: EditStudent.php");
                    }?>
                <form action="EditStudent.php" method="post">
                <table>
                        <tr><td><p class="thick">ID:</p></td> <td><input type="text" name="id" value=<?php echo $results["id"];?> /></td></tr>
                        <tr><td><p class="thick">Name:</p></td> <td><input type="text" name="name" value=<?php echo $results["name"];?> /></td></tr>
                        <tr><td><p class="thick">Surname:</p></td> <td><input type="text" name="surname" value=<?php echo $results["surname"];?> /></td></tr>
                        <tr><td><p class="thick">Father Name:</p></td> <td><input type="text" name="fathername" value=<?php echo $results["fathername"];?> /></td></tr>
                        <tr><td><p class="thick">Grade:</p></td> <td><input type="number" step=0.01 name="grade" value=<?php echo $results["grade"];?> /></td></tr>
                        <tr><td><p class="thick">Phone Number:</p></td> <td><input type="text" name="mobilenumber" value=<?php echo $results["mobilenumber"];?> /></td></tr>
                        <tr><td><p class="thick">Date of birth:</p></td> <td><input type="date" name="birth" max="<?php echo date('Y-m-d', strtotime("-1 days")); ?>" value=
                            <?php echo $results["birthday"];?> /></td></tr>
                    </table>
                        <input type="submit" name="submit2" value="Edit" />
                        <input type="submit" name="submit3" value="Change Student" />
                    </form>
              <?php if (isset($_POST['submit2'])){
                        if (intval(strlen($_POST['mobilenumber'])==10)){
                            editStudent($results["id"]);
                            setcookie("id", null, time()+60*60);
                            header("Location: Teacher.php");
                        }else 
                            echo "Please enter a phone number with 10 digits.";
                    }
                    if (isset($_POST['submit3'])){
                        setcookie("id", null, time()+60*60);
                        header("Location: EditStudent.php");
                    }
                }?>
            </center>
	</body>
</html>
<?php ob_end_flush();?>