<?php include 'header.php'; if(!isLoggedIn()) header('Location: login.php');
$userId = $_SESSION['student_id'];
$chats = $conn->query("SELECT * FROM chats WHERE user_id = $userId ORDER BY created_at DESC LIMIT 10"); ?>
<div class="dashboard">
<h2>Welcome, <?=$_SESSION['student_name']?></h2>
<div class="dash-grid">
<div class="dash-card"><h3>Quick Links</h3><a href="#">Download Prospectus</a><a href="#">Fee Payment</a><a href="#">Admission Status</a></div>
<div class="dash-card"><h3>Recent Chats</h3>
<?php while($chat = $chats->fetch_assoc()): ?>
<p><b><?=ucfirst($chat['sender'])?>:</b> <?=substr($chat['message'],0,40)?>...</p>
<?php endwhile; ?></div></div></div>
<?php include 'footer.php'; ?>