<?php
require __DIR__ . '/../../lib/Pusher/Pusher.php';

// Initialize Pusher
$pusher = new Pusher(
    "8b7ecf7e2ed0f17f5c8d",
    "96c2b44597a1eec96e53",
    "1960114",
    ['cluster' => 'ap1', 'useTLS' => true] // Ensure useTLS is true for secure connection
);

session_start();
$sender_id = $_SESSION['user_id'];  
$receiver_id = $_POST['receiver_id'];  
$message = $_POST['message'];
$file_url = $_POST['file_url'] ?? NULL;

// Log message sending attempt
error_log("📢 Sending message: Sender ID: $sender_id, Receiver ID: $receiver_id, Message: $message, File URL: $file_url");

// 🚀 Trigger Pusher event and check for errors
$response = $pusher->trigger("chat_channel_$receiver_id", "new_message", [
    'sender_id' => $sender_id,
    'message' => $message,
    'file_url' => $file_url
]);

// 🔴 Check if Pusher event failed
if (!$response) {
    error_log("❌ Pusher event failed!");
} else {
    error_log("✅ Pusher event sent to chat_channel_$receiver_id");
}

echo json_encode(["status" => "success"]);

?>