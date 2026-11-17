<?php include_once 'config.php'; ?>
<!DOCTYPE html><html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ABC College Portal</title><link rel="stylesheet" href="style.css">
</head><body>
<nav class="navbar"><div class="nav-container">
<a href="index.php" class="logo"><img src="images/logo.png"> ABC College</a>
<ul class="nav-links">
<li><a href="index.php">Home</a></li>
<li><a href="contact.php">Contact</a></li>
<?php if(isLoggedIn()): ?>
<li><a href="dashboard.php">Dashboard</a></li>
<li><a href="logout.php">Logout</a></li>
<?php else: ?>
<li><a href="login.php">Login</a></li>
<li><a href="register.php" class="btn-nav">Register</a></li>
<?php endif; ?>
</ul></div></nav>