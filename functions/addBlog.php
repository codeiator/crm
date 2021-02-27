<?php 

include("../dbconnection.php");

echo $title = $_POST['title'];
echo $author = $_POST['author'];
echo $description = $_POST['description'];
echo $content = $_POST['content'];
echo $img = $_POST['img'];

 

$query = "insert into blog(title,author,description,content,banner) 
values('".$title."','".$author."','".$description."','".$content.'","'.$img."')";

if (!$con2 -> query($query)) {
  echo("Error description: " . $con2 -> error);
}


 ?>
