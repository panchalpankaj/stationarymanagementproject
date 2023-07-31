<?php
	include('product.php');
	
		echo $id=$_GET['id'];
		$res=mysqli_query($con,"delete from product1 where id='$id'");

		if($res){
			echo "Successfully...!!!";
			header("Location:welcome2.php");
		}
		else{
			echo "
			<script>
			alert('something went wrong while deleting');
			</script>
			";
		}

		// header("Location:crude.php");
?>