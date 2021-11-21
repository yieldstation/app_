# sample_app

git clone後 以下の処理を行うことで、http://localhost:8080 でLaravelホームページにアクセスできるようになる。

```
sudo docker-compose up -d
```

以下は、clone後の初回のみ。

```
sudo docker-compose exec app bash
```

```
composer install
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