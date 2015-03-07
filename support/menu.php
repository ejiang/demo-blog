<navbar>
<ul id="nav">
<li><a href="/index.php">Main</a></li>
<li><a href="/about.php">About</a></li>
<?php if (1 === 0) :?>
<li><a href="/login.php">Login</a></li>
<?php else: ?>
<li><a href="/submit.php">Submit</a></li>
<li><a href="/logout.php">Logout</a></li>
<?php endif; ?>
</ul>
</navbar>
