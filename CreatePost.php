<?php 
require_once 'PostRepository.php';

$name = $_POST['name'];
$prise = $_POST['prise'];

$post = new Post;
$post->setName($name);
$post->setPrise($prise);

$repository = new PostRepositry;
try{


$repository->create($post);
}catch(Exception $e){
	echo $e->getMessage();
	return;

}
echo "Post created successfully with name".$post->getName()."
<br>";
?>