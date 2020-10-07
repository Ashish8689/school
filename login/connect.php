<?php
 
 $username="root";
 $password="";
 $server="localhost";
 $db="login";

 $con=mysqli_connect($server,$username,$password,$db);

if($con){

	$name = $_POST['name'];
	$email= $_POST['email'];
	$mobile=$_POST['mobile'];
	$class = $_POST['class'];
	$details=$_POST['details'];

	$insertQuery = "insert into query(name,email,mobile,class,details) values('$name','$email','$mobile','$class','$details')";

	$run = mysqli_query($con,$insertQuery);

	if($run){
		?>
		<script>
		  alert('data inserted');
		</script>
		<?php
	}
	else{
		?>
		<script>
			alert('data not send retry!!!');
		</script>
		<?php
	}
	header('location:../index.html');
}

	else{
		?>
		<script>
			alert('No connection');
		</script>
		<?php
	}	

?>