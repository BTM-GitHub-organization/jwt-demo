<?php
require 'functions.php';

// HTTPヘッダーからJWTを取得
$headers = getallheaders();
$jwt = $headers['Authorization'] ?? '';

if (!$jwt) {
    http_response_code(401); // トークンがない
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

// JWTを検証
$decoded = verifyJWT($jwt);

if (!$decoded || $decoded->role !== 'admin') {
    http_response_code(403); // 権限がない
    echo json_encode(['error' => 'Forbidden']);
    exit;
}

// 管理ページの内容を表示
echo json_encode(['message' => 'Welcome to the admin page!']);
