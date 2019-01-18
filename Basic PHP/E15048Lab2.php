<html>
<head>

<style>
	div{
		width:450px;
		margin-right:auto;
		border:1px solid black;
	}
</style>
</head>
<body>
	
	
	<div>
	<h1>
		Your Information System
	</h1>
	<p>
		Thank you <?php echo "<b>"; echo $_POST["firstName"];echo "</b>";?> for your purchases from our web site<br><br>
		your item colour is : <?php  echo "<b>"; echo $_POST["colour"];echo "</b>"; ?> & T-Shirt size : <?php echo "<b>";echo $_POST["size"];echo "</b>";?><br>
		<br>
		Selected items/item are :<br>
		<?php 
		$name = $_POST['item'];
		foreach($name as $item){		
		echo "<ul>";
		echo "<b>";
		echo "<li>".$item."</li>";
		echo "</b>";
		echo "</ul>";
		}
		?>
		your items will be sent to :<br><br>
		<?php echo "<b>";echo $_POST["firstName"];?> <?php echo $_POST["lastName"];echo "</b>";?>,<br>
		<b>No.</b><?php echo "<b>";echo $_POST["address1"];echo "</b>";?>,<br>
		<b>No.</b><?php echo "<b>";echo $_POST["address2"];echo "</b>";?>,<br>
		<b>No.</b><?php echo "<b>";echo $_POST["address3"];echo "</b>";?>,<br>
		<br>
		Thank you for submitting your comments. We appreciate it. You said:<br><br>
		<?php echo "<i>";echo $_POST["mytextarea"];echo "</i>";?><br>
		</div>
	</p>

</body>
</html>