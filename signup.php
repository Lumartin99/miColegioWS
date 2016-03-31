<?php
$con = mysqli_connect("localhost","root","luismar","mydb");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}
 
$username=$_POST['username'];
$name=$_POST['name'];
$password=$_POST['password'];
$type=$_POST['type'];

$check = mysqli_query($con,"select username from mydb.users where username='".$username."'");

if (mysqli_num_rows($check) > 0){
	echo 'El usuario ya existe';
}
else {
	$result = mysqli_query($con,"insert into mydb.users(username,name,password) values ('".$username."','".$name."','".$password."')");
	if($result == true) {
		echo 'Registro correcto';
	}
	else{
		echo 'Fallo en el registro';
	}
}	


mysqli_close($con);
?>



