# PHP-Docker-CloudRun-GCS-CloudSQL
テンプレートプロジェクトです。

# 準備・セッティング
GCSとCloud SQLへの適切な権限を付与したサービスアカウントのサービスキーを取得し、/secrets/credential.json として保存してください。/secrets/credential.json は、.gitignore されるので、各自管理してください。

## サービスアカウントキーの発行
以下を参考に。
https://docs.google.com/document/d/1eiskgVFaJQ_YD7skrW-UcWt4-sEu8XUj4upCUMoKAT4/edit#

取得したサービスアカウントキーファイルは、/secretsフォルダに配置してください。

## ターゲットバケットの名前設定
settings.php の $bucketname = 'your-bucket-name-here';　を、上記サービスアカウントがアクセスできるバケット名に変更してください。

# ローカル実行
## 開始
docker compose up --build -d
## 停止
docker compose stop
## 削除
docker compose rm

