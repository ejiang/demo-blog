<?php
include 'postclass.php';

$servername = "127.0.0.1";
$username = "root";
$password = "password";
$dbname = "mydb";
$res = [];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->query("SELECT * FROM myposts;"); 
	$stmt->setFetchMode(PDO::FETCH_INTO, new Post);

	foreach ($stmt as $student) {
		$res[] = '<div id="post'.$student->id.'" class="post">'."\n".$student->getPost()."\n</div>\n";
	}
	$res = array_reverse($res);
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>
