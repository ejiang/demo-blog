<?php
// Make connection
$servername = "127.0.0.1";
$username = "root";
$password = "password";

$title = $_POST['title'];
$body = $_POST['body'];

$success = false;

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// this is where SQL injections take place
  $sql = "INSERT INTO myposts (title, body, postdate) VALUES ('$title', '$body', NOW());";
  // use exec() because no results are returned
  $conn->exec($sql);
	$success = true;
}
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}

// Close connection
$conn = null;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="no title" charset="utf-8">
</head>
<body id="index" onload="">
	<div id="content">
		<?php include 'support/blogtitle.php'; ?>
		<?php include 'support/menu.php'; ?>
		
		<div id="meat">
			<div id="posts">
				<?php if ($success): ?>
				<h2>Success!</h2>
				<?php else: ?>
				<h2>Failure!</h2>
				<?php endif; ?>
			</div>
			
			<?php include 'support/sidebar.php'; ?>
		</div>
		
		<div id="bottom">
			<p id="siteinfo">Made in 2015</p>
		</div>
	</div>
</body>
</html>

