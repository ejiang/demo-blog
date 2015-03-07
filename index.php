<?php
/*

So we're thinking something like

url/index.php?page=1
url/index.php?page=2
etc etc

*/

include 'support/conn.php';
$page = intval($_GET['page']);
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
			// $page defaults to 0 if $_GET['page'] doesn't exist
			$starti = 5*$page;
			
			for ($i = $starti; $i < $starti + 5; $i++) { 
				echo $res[$i];
			}
			
			if ($res[$starti + 5]) {
				$nextpage = $page + 1;
				echo '<a id="nextlink" href="/index.php?page='."$nextpage".'">Next</a>'."\n";
			}
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
