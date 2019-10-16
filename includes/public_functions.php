<?php 
/* * * * * * * * * * * * * * *
* Returns all published posts
* * * * * * * * * * * * * * */
function getPublishedPosts() {
	// use global $conn object in function
	$con = mysqli_connect("localhost", "id11240893_admin", "admin", "weekly");
	//check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $sql = "SELECT * FROM posts WHERE published= true";
	$result = mysqli_query($con, $sql);
    if ($result === false) {
        echo "Error in query.";
        return;
    }
    else if($result === 0){
        echo "No results";
        return;
    }
	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

// more functions to come here ...
?>