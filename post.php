<?php
/*

So we're thinking something like

url/post.php?id=1
url/post.php?id=2
etc etc

*/

include 'support/conn.php';
$postid = intval($_GET['id']);

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
			<?php
			echo array_reverse($res)[$postid-1];
			?>
			</div>
			
			<?php include 'support/sidebar.php'; ?>
		</div>
		
		<div id="bottom">
			<p id="siteinfo">Made in 2015</p>
		</div>
	</div>
</body>
</html>
