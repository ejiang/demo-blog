<?php
/**
* Post
*/
class Post {
	public $id;
  public $title;
  public $body;
	public $postdate;
	
	public function getPost() {
		return "<h3>$this->title</h3>\n<time><a class=\"datelink\" href=\"/post.php?id=$this->id\">$this->postdate</a></time>\n<p>$this->body</p>";
	}
}
?>
