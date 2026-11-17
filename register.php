<?php include 'header.php'; if(isLoggedIn()) header('Location: dashboard.php');
if(isset($_POST['register'])){
    $name = $_POST['name']; $email = $_POST['email']; $phone = $_POST['phone'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO students (name, email, phone, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $pass);
    if($stmt->execute()){
        $_SESSION['student_id'] = $conn->insert_id; $_SESSION['student_name'] = $name;
        header('Location: dashboard.php');
    } else { $error = "Email already exists"; }
} ?>
<div class="form-container"><form method="POST" class="auth-form">
<h2>Create Account</h2><?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="text" name="phone" placeholder="Phone" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="register">Register</button>
<p>Already have account? <a href="login.php">Login</a></p>
</form></div><?php include 'footer.php'; ?>