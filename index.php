<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Website</title>
    <link rel="stylesheet" href="homepage1.css">
</head>
<body>
    <header>
        <h1>The Last Library</h1>
   <nav class="navbar">
    <ul class="nav-list">
        <li class="nav-item"><a href="index.html">Home</a></li>
        <li class="nav-item"><a href="catalog.html">Catalog</a></li>
        <li class="nav-item"><a href="borrow.html">Borrow</a></li>
        <li class="nav-item"><a href="return.html">Return</a></li>
        <li class="nav-item"><a href="Adminlogin.html">Admin</a></li>
		<li class="nav-item"><a href="signup.html">Signup</a></li>
		</ul>
   </nav>

    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Welcome to Our Library  <?php echo $user_data['user_name']; ?></h2>
            <p>Explore our vast collection of books and enjoy a world of knowledge.</p>
            <a href="login.html" class="btn">Get Started</a>
        </div>
    </section>

    <section class="featured-books">
        <h2>Featured Books</h2>
        <div class="book">
            <img src="img5.jpg" alt="Book Title 1">
            <h3>Keep Track Your Favourite Books</h3>
        </div>
        <div class="book">
            <img src="img6.jpg" alt="Book Title 2">
            <h3>Read Free Library Books Online</h3>
        </div>
        <div class="book">
            <img src="img7.jpg" alt="Book Title 3">
            <h3>Try The Virtual Library Explorer</h3>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Library Name. All Rights Reserved.</p>
    </footer>
</body>
</html>
	