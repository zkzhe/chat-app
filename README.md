## 關於 聊天室

此專案使用 Laravel 搭配 Vue.js & Pusher 所打造的，供初學者學習與參考.

## 環境建置

- php: "^7.\*"
- mysql: 5.7
- npm: "^7.\*"

## 功能

- 可在對應的"頻道"內進行聊天.

## 設置

- cp .env.example .env
- 註冊 [pusher](https://pusher.com/ "pusher") 建立頻道後,修改 .env

```
管理員
APP_URL:

DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=
```
- composer install.
- php artisan migrate.
- php artisan db:seed.
- npm install.
- npm run dev (local) or npm run production.
