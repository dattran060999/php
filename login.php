<?php 

$username= filter_input(INPUT_POST,"username");
$password= filter_input(INPUT_POST,"password");
// if($username=="admin"&& $password=="admin")
// {
// 	echo "1";
// } else {
// 	echo"0";
// }


$mysqli = new mysqli("localhost","root","","androidphp");
$result = mysqli_query($mysqli,"select * from nguoidung where usernam ='".$username."' and password ='".$password."' ");


if($data = mysqli_fetch_array($result)){
	echo "1";
} else {
	echo "0";
}


?>
