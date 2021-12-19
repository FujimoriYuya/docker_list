# docker_sample

## セット手順

```
git clone git@github.com:FujimoriYuya/docker_example.git
cd docker_example

### docker 起動
docker-compose build
docker-compose up -d
```

---

### うまく動かない時

#### ↓コマンドでコンテナ一旦全削除して build から再度やり直してみる。
```
docker-compose down
docker stop $(docker ps -q)
docker rm $(docker ps -q -a)
```

---

```
### phpコンテナに入って
docker exec -it list_php bash

### .env 作成する (↓のものに置き換え)
### https://drive.google.com/file/d/1KHum629LNS-DDRzYx6DKL7OPvh6lfDMp/view?usp=sharing

cp .env.example .env

### jetstream
composer require laravel/fortify
php artisan migrate
php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"

### vendor 入れ直す
composer install

### DB作成
php artisan migrate

### ログインパスワード追加
App\Models\User::create(["name" => "admin", "email" => "admin@example.com", "password" => Hash::make('password')]);

```

### 確認

http://localhost/ にアクセスして、laravel の初期画面が表示されることを確認。


---

### 各コンテナ接続&確認

#### 
```
docker exec -it list_core
```

#### db (mysql)

```
docker exec -it list_db bash
mysql -u admin -p

```

#### redis

```
docker exec -it list_redis sh
redis-cli

set redis_data data
keys *
get redis_data
"data"

```

---

### 参考文献

https://qiita.com/A-Kira/items/1c55ef689c0f91420e81

https://www.suzu6.net/posts/252-docker-laravel-env/

https://www.seeds-std.co.jp/blog/creators/2019-09-17-171256/

https://www.engilaboo.com/laravel-docker/

### jetstream
https://qiita.com/apricotcomic/items/c3b3cf3b5bc1f1c6ebc0
https://qiita.com/manbolila/items/498aae00f3574c72f031


#### Redis接続確認
https://qiita.com/meidaimae/items/74e76fca30d19f9258d4#%E7%92%B0%E5%A2%83
