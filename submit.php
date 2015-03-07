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
				<div class="post">
					<form action="receive.php" method="post" accept-charset="utf-8">
						Title:<br />
						<input type="text" name="title" />
						<br />
						
						Body:<br />
						<textarea name="body" cols="40" rows="20"></textarea>
						<br />
						
						<input type="submit" name="submitbutton" value="Submit" id="submitbutton" />
					</form>
				</div>
			</div>
			
			<?php include 'support/sidebar.php'; ?>
		</div>
		
		<div id="bottom">
			<p id="siteinfo">Made in 2015</p>
		</div>
	</div>
</body>
</html>
