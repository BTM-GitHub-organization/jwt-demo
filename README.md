# About

このリポジトリは『JWTをハックしてみる』の記事で利用したアプリケーションです。

このプロジェクトでは、依存ライブラリの管理に Composer を使用しています。  
以下の手順に従って、環境をセットアップしてください。


## 環境構築
### 前提条件  
PHPとComposerが動作している環境が準備済みの前提となります。

[XAMPP](https://www.apachefriends.org/jp/index.html)などを利用すると手軽に環境構築が可能です。

```
# php -v
PHP 8.2.12 (cli) (built: Oct 24 2023 21:15:15) (ZTS Visual C++ 2019 x64)
Copyright (c) The PHP Group
Zend Engine v4.2.12, Copyright (c) Zend Technologies
```

```
# composer --version
Composer version 2.8.4 2024-12-11 11:57:47
PHP version 8.2.12 (C:\xampp\php\php.exe)
Run the "diagnose" command to get more detailed diagnostics output.
```

### 依存ライブラリのインストール  
プロジェクトフォルダ内で以下のコマンドを実行します。

```
composer install
```

### 自動ロードの確認
`vendor/autoload.php` が正しく生成されたか確認してください。  
このファイルをプロジェクトで読み込むことで、依存ライブラリが使用可能になります。

`functions.php`の以下の参照箇所を各自の環境に合わせて修正してください。

```
require './vendor/autoload.php'; //各自の環境に合わせ修正
```
