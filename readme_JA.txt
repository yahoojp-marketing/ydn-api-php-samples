--------------------------------
【バージョン】
--------------------------------
Version 201907

■変更履歴
-----------
2019/03/11:
- Version 201903に対応しました。
2019/08/01:
- Version 201907に対応しました。

--------------------------------
【概要】
--------------------------------
このサンプルプログラムは、PHPを使用して各APIを呼び出す処理のサンプルです。
PHPのSoapClientライブラリを使用してAPIを呼び出します。


--------------------------------
【内容物】
--------------------------------
conf/
  - api_config.ini      : 各種IDを記述する設定ファイルです。
src/Jp/YahooApis/YDN/
  - V201907             : 対象のAPIバージョンのPHP用EntityサンプルClassです。
  - AdApiSample/
    - Basic/            : Yahoo!プロモーション広告API（YDN）の各種Serviceサンプル集です。
    - Feature/          : Yahoo!プロモーション広告API（YDN）を利用した広告入稿、ターゲティングなどのサンプル集です。
    - Repository/       : Yahoo!プロモーション広告API（YDN）各種サンプルを利用するための補助ユーティリティです。
    - Util/             : Yahoo!プロモーション広告API（YDN）各種サンプルを利用するための補助ユーティリティです。
download/               : 各種Downloadサービスを実行した際に、ダウンロードしたデータがファイルとして格納されるディレクトリです。
upload/                 : 各種Uploadサービスを実行する際に、利用するデータファイルを格納するディレクトリです。


--------------------------------
【Feature説明】
--------------------------------
src/Jp/YahooApis/YDN/AdApiSample/Feature/
  - LabelSample.php                             : ラベル機能を利用した処理のサンプルです。
  - DynamicAdsForDisplaySample.php              : 動的ディスプレイ広告を利用した入稿処理のサンプルです。
  - AdGroupTargetSample.php                     : ターゲティング機能を利用した処理のサンプルです。


--------------------------------
【環境設定】
--------------------------------
ご使用のオペレーティング・システムがUnix系OS、Windowsのいずれの場合でも、PHPの動作環境を構築するために、以下をインストールしてください。

1. PHP 7.2.x、またはそれ以上のバージョン
2. composer.jsonに記載されている各種エクステンション
3. confディレクトリ配下にあるapi_config.iniに各IDを記述します。
  - location            : リクエスト先ごとにコメントアウトを外してください。
  - license             : APIライセンスを記述してください。
  - apiAccountId        : APIアカウントIDを記述してください。
  - apiAccountPassword  : APIアカウントパスワードを記述してください。
  - onBehalfOfAccountId : 代行アカウントを記述してください（任意）。
  - onBehalfOfPassword  : 代行アカウントパスワードを記述してください（任意）。
  - accountId           : アカウントIDを記述してください（必須）。


--------------------------------
【実行】
--------------------------------
cloneしたサンプルプログラムのディレクトリに移動し、以下のコマンドを実行します。

■実行例
$ php ./src/Jp/YahooApis/YDN/AdApiSample/Basic/Account/AccountServiceSample.php
$ php ./src/Jp/YahooApis/YDN/AdApiSample/Feature/LabelSample.php

※1　データをダウンロードする処理を実行した場合には、downloadディレクトリにファイルが格納されます。
※2　データをアップロードする処理を実行する場合には、あらかじめuploadディレクトリ配下にアップロードしたいファイルを格納しておく必要があります。

