<?php
require 'functions.php';

// 仮のユーザデータ
$users = [
    'admin' => ['password' => 'admin123', 'role' => 'admin'],
    'user'  => ['password' => 'user123', 'role' => 'user'],
];

// フォーム送信データを取得
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// 認証処理
if (isset($users[$username]) && $users[$username]['password'] === $password) {
    // JWTを生成
    $jwt = createJWT($username, $users[$username]['role']);
    echo json_encode(['token' => $jwt]);
} else {
    // 認証失敗
    http_response_code(401);
    echo json_encode(['error' => 'Invalid credentials']);
}
?>
