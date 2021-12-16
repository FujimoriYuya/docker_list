# docker_sample

## セット手順

```
git clone git@github.com:FujimoriYuya/docker_example.git


### docker 起動
docker-compose build
docker-compose up -d

### phpコンテナに入って
docker-compose exec php bash

### laravel プロジェクト作成
composer create-project --prefer-dist laravel/laravel ./

```

### 確認

http://localhost/ にアクセスして、laravel の初期画面が表示されることを確認。

### うまく動かない時

↓コマンドでコンテナ一旦全削除して build から再度やり直してみる。
```
docker rm $(docker ps -q -a)
docker rm $(docker ps -q -a)
```

### 参考文献

https://qiita.com/A-Kira/items/1c55ef689c0f91420e81