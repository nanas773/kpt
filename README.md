KPT

# Description
KPT を簡単にできるツール

# Enviroment
- バックエンド： Laravel
- フロントエンド： Vue
- CSS: Tailwind

# 開発環境構築

1. リポジトリをクローン
2. `make init` を実行。
  - 初期化処理を色々やってくれます。詳細は [こちら](https://github.com/nanas773/kpt/blob/main/Makefile#L13-L19)
  - 既存の .env を上書きしてしまうので、ローカルに変更済みの .env がある場合は注意。
3. `make yarn` を実行。
  - JavaScript のライブラリをインストール
4. `make yarn-watch` を実行
5. http://localhost にアクセス

## 開発環境構築後、次の日に開発をする場合
1. `make up`
2. `make yarn-watch`
3. http://localhost にアクセス

# デプロイ
WIP

# 関連リポジトリ
- インフラ関連：https://github.com/nanas773/kpt-infra
- 設計関連：https://github.com/nanas773/kpt-design
