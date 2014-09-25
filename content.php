<?php
include('cent.php');

function getPosts() {
	$query = mysql_query("SELECT * FROM posts") or die (mysql_error());
	while($post = mysql_fetch_assoc($query)) {
		echo"<h2>" .$row['ID'] . "</h2>";
		echo $row['post_title'];
		echo $row['post_content'];
	}
}
?>
