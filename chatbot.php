
<?php
header('Content-Type: application/json');
include '../config.php';
$data = json_decode(file_get_contents('php://input'), true);
$sessionId = $data['sessionId'] ?? '';
$userMsg = $data['message'] ?? '';
$userId = isLoggedIn() ? $_SESSION['student_id'] : NULL;
$stmt = $conn->prepare("INSERT INTO chats (user_id, session_id, sender, message) VALUES (?, ?, 'user', ?)");
$stmt->bind_param("iss", $userId, $sessionId, $userMsg); $stmt->execute();
$stmt = $conn->prepare("SELECT answer FROM faqs WHERE keyword = ?");
$stmt->bind_param("s", $userMsg); $stmt->execute(); $result = $stmt->get_result();
$reply = ($row = $result->fetch_assoc()) ? $row['answer'] : "Sorry, I didn't understand. Please select a question from the dropdown.";
$stmt = $conn->prepare("INSERT INTO chats (user_id, session_id, sender, message) VALUES (?, ?, 'bot', ?)");
$stmt->bind_param("iss", $userId, $sessionId, $reply); $stmt->execute();
echo json_encode(['reply' => $reply]);
?>