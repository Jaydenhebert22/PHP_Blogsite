<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">
	<!-- Styling for public area -->
	<link rel="stylesheet" href="static/css/public_styling.css">
	<meta charset="UTF-8">
	<title>WTF Weekly | Home </title>
</head>
<body>
	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
        <div class="navbar">
	<div class="logo_div">
		<a href="index.php"><h1>WTF Weekly</h1></a>
	</div>
	<ul>
	  <li><a class="active" href="index.php">Home</a></li>
	  <li><a href="#news">News</a></li>
	  <li><a href="#contact">Contact</a></li>
	  <li><a href="#about">About</a></li>
	</ul>
</div>
		<!-- // navbar -->
        <div class="banner">
	<div class="welcome_msg">
		<h1>Today's Inspiration</h1>
		<p> 
		    One day your life <br> 
		    will flash before your eyes. <br> 
		    Make sure it's worth watching. <br>
			<span>~ Gerard Way</span>
		</p>
		<a href="register.php" class="btn">Join us!</a>
	</div>
	<div class="login_div">
		<form action="index.php" method="post" >
			<h2>Login</h2>
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password"  placeholder="Password"> 
			<button class="btn" type="submit" name="login_btn">Sign in</button>
		</form>
	</div>
</div>
		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- more content still to come here ... -->
			<?php foreach ($posts as $post): ?>
	<div class="post" style="margin-left: 0px;">
		<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
		<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
			<div class="post_info">
				<h3><?php echo $post['title'] ?></h3>
				<div class="info">
					<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					<span class="read_more">Read more...</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>
		</div>
		<!-- // Page content -->

		<!-- footer -->
		        <div class="footer">
			<p>WTF Weekly &copy; <?php echo date('Y'); ?></p>
        </div>
	    <!-- // container -->
    </body>
</html>
		<!-- // footer -->

	
