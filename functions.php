<?php
require '../../vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

// セキュリティのため適切なキーに変更してください
$secretKey = 'demo';

// JWTを生成する関数
function createJWT($username, $role)
{
    global $secretKey;

    $payload = [
        'iss' => 'jwt-demo', // 発行者
        'iat' => time(),     // 発行時間
        'exp' => time() + 3600, // 有効期限: 1時間
        'username' => $username,
        'role' => $role,
    ];

    return JWT::encode($payload, $secretKey, 'HS256');
}

// JWTを検証してデコードする関数
function verifyJWT($jwt)
{
    global $secretKey;

    try {
        return JWT::decode($jwt, new Key($secretKey, 'HS256'));
    } catch (Exception $e) {
        return null; // 検証失敗時
    }
}
