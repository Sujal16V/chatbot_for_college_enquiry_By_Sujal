<?php include 'header.php'; if(isLoggedIn()) header('Location: dashboard.php');
if(isset($_POST['login'])){
    $email = $_POST['email']; $pass = $_POST['password'];
    $stmt = $conn->prepare("SELECT id, name, password FROM students WHERE email = ?");
    $stmt->bind_param("s", $email); $stmt->execute(); $result = $stmt->get_result();
    if($row = $result->fetch_assoc()){
        if(password_verify($pass, $row['password'])){
            $_SESSION['student_id'] = $row['id']; $_SESSION['student_name'] = $row['name'];
            header('Location: dashboard.php'); exit;
        }
    } $error = "Invalid email or password";
} ?>
<div class="form-container"><form method="POST" class="auth-form">
<h2>Student Login</h2><?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="login">Login</button>
<p>New here? <a href="register.php">Create account</a></p>
</form></div><?php include 'footer.php'; ?>