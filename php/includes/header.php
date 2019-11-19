<div id="header">
	<h1>TUC </h1>
	<?php if(isset($_SESSION["user"])){?>
		<h4><?php echo $_SESSION["name"];?> <br><br><?php echo $_SESSION["surname"];?></h4>
	<?php }?>
</div>