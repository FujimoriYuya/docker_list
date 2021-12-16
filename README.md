# docker_sample

## セット手順

```
git clone git@github.com:FujimoriYuya/docker_example.git


### docker 起動
docker-compose build
docker-compose up -d
```

### 確認

http://localhost/ にアクセスして、laravel の初期画面が表示されることを確認。

### うまく動かない時

#### ↓コマンドでコンテナ一旦全削除して build から再度やり直してみる。
```
docker stop $(docker ps -q)
docker rm $(docker ps -q -a)
docker-compose build
docker-compose up -d
```

#### プロジェクト再生成試してみる
```
rm -rf laravel
mkdir laravel

### phpコンテナに入って
docker exec -it list_php bash

### laravel プロジェクト作成
composer create-project laravel/laravel .


```

### 参考文献

https://qiita.com/A-Kira/items/1c55ef689c0f91420e81