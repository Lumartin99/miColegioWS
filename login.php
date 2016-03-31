<?php 
$con = mysqli_connect("localhost","root","luismar","mydb");
if (mysqli_connect_errno($con)){
   echo '{"query_result":"ERROR"}';
}
$username=$_POST['username'];
$password=$_POST['password'];

$res = mysqli_query($con,"select username,password from mydb.users where username='".$username."'");

$result = array();
 
while($row = mysqli_fetch_array($res)){
	array_push($result,array('username'=>$row[0],'password'=>$row[1]));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con); 
?>
