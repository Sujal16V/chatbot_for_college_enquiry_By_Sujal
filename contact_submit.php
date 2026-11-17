<?php include '../config.php';
$name = $_POST['name']; $email = $_POST['email']; $subject = $_POST['subject']; $message = $_POST['message'];
$stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message); $stmt->execute();
echo json_encode(['msg' => 'Message sent successfully! We will contact you soon.']); ?>