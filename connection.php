<?php
	$server='localhost';
	$uname='root';
	$pass='';
	$db='testmjdb';
	$con=mysqli_connect($server,$uname,$pass,$db);
	if($con){

		?>

		<script>
			alert('connection succesfull');
		</script>
		<?php
	}else{
		?>

		<script>
			alert('connection not succesfull');
		</script>
		<?php


	}


?>