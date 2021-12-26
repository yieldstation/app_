# sample_app

git clone後 以下の処理を行うことで、http://localhost:8080 でLaravelホームページにアクセスできるようになる。

```
sudo docker-compose up -d
```

拡張機能「Remote -Containers」をインストールする。

vscode画面左下の「><」のマークから、「Attach to Running Container」を選択。
「api」コンテナに接続する。

「フォルダを開く」から「/work」を開く。


以下は、clone後の初回のみ。

```
※Remote Containersをインストールしない場合は、自分でコンテナにアタッチする必要がある。
sudo docker-compose exec app bash
```

```
composer install
```

```
composer require --dev barryvdh/laravel-ide-helper
php artisan ide-helper:model --nowrite
```

```
composer require laravelcollective/html
```

```
chmod 777 -R storage/
```

```
cp .env.example .env
```

```
php artisan key:generate
```

```
php artisan migrate
```