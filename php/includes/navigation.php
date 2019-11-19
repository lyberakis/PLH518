<div id="navigation">
    <?php if(isset($_SESSION["user"])){?>
        <button type="button" onclick="window.location.href='AddStudent.php'">Add</button>
        <button type="button" onclick="window.location.href='EditStudent.php'">Edit</button>
        <button type="button" onclick="window.location.href='DeleteStudent.php'">Delete</button>
        <button type="button" onclick="window.location.href='SearchStudent.php'">Search</button>
        <button type="button" style="float:right" onclick="window.location.href='logout.php'">Logout</button>
    <?php }?>
</div>