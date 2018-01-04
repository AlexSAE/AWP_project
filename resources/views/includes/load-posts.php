<?php
	include 'dbh.php';

	$postsNewCount = $_POST['postsNewCount'];

	$sql = "SELECT * FROM posts LIMIT $postsNewCount";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<p>";
			echo $row['user_id'];
			echo "<br>";
			echo $row['title'];
			echo "<br>";
			echo $row['languages'];
			echo "<br>";
			echo $row['description'];
			echo "</p>";
		}
	} else {
		echo "There are no comments!";
	}
?>