<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
require_once 'Post.php';
class PostRepositry{


function create(Post $post){
	//$connection = new PDO("mysql:host=localhost;dbname=db", "root", "");
	require_once("DbConnection.php");
	$sql = "INSERT INTO demo ( name,  prise ) VALUES ('".$post->getName()."','".$post->getPrise()."')";

	$connection->exec($sql);
	return true;
}
}
function getData(){
	include('DbConnection.php');
//$connection = new PDO("mysql:host=localhost;dbname=db", "root", "");
$sql ="SELECT * FROM  demo";
$result = $connection->query($sql);
while($row = $result->fetch()){
	echo "<tr>
  <td>".$row['name']."</td>
  <td>". $row['prise']."</td>
	     </tr>";
}

}


?>
</body>
</html>