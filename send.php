<?php
// Замените на свой токен бота Telegram
$telegramBotToken = 'YOUR_TELEGRAM_BOT_TOKEN';
// Замените на свой чат ID, куда будут отправляться сообщения
$telegramChatId = 'YOUR_TELEGRAM_CHAT_ID';

// Получаем данные из формы
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$additionally = $_POST['additionally'] ?? '';

// Сообщение для отправки в Telegram
$message = "Новая заявка! :\nName: $name\nEmail: $email\nPhone: $phone\nAdditionally: $additionally";

// Отправляем сообщение в Telegram
$telegramApiUrl = "https://api.telegram.org/bot$telegramBotToken/sendMessage";
$telegramData = [
    'chat_id' => $telegramChatId,
    'text' => $message
];

// Используем cURL для отправки запроса к API Telegram
$ch = curl_init($telegramApiUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $telegramData);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);

// Проверяем успешность отправки сообщения
if (!$result) {
    die('Error: Failed to send message to Telegram');
} else {
    echo 'Form data sent successfully!';
}
