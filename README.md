# sample_app
## WebAPI開発環境
git clone後 以下の処理を行うことで、http://localhost:8080/api/... でWebAPIが立ち上がる。

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

```
php artisan ide-helper:model --nowrite
```

## フロントエンド開発環境
vscode画面左下の「><」のマークから、「Attach to Running Container」を選択。
「api」コンテナに接続する。

「フォルダを開く」から「/workspace」を開く。
