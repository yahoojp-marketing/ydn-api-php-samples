--------------------------------
【バージョン】
--------------------------------
Ver.5.3.0

■変更履歴
-----------
2016/04/20:
- V5.3 AuditLogDownloadSample、StatsSampleを追加しました。

2015/11/18:
- V5.2 キャリアターゲティングに対応しました。
- V5.2 RetargetingSampleを追加しました。

2015/08/05:
- V5.1 レポート機能を刷新致しました。

2015/04/15:
- V5.0 インフィード広告に対応しました。

2014/09/04:
- V4.7 クリエイティブ最適化オプションに対応しました。
- V4.7 コンバージョントラッカーに対応しました。

2014/03/26:
- V4.6 プレイスメントターゲティングに対応しました。

2014/02/07：
- V4.6 類似ユーザターゲティングを追加しました。
- V4.6 セグメントターゲティングを追加しました。
- V4.6 フリークエンシ・コントロールを追加しました。
- V4.6 リーチフリークエンシレポートを追加しました。

2013/09/04：
- V4 AccountAdProductSample, DictionarySample, SearchKeywordSampleを追加しました。

2013/05/28:
- V4 サイトリターゲティングに対応しました。

2013/02/27:
- V4 AdSample / MediaSampleのAdGroupAdServiceにbidを追加しました。
- V4 BulkDownloadSampleのgetBulkDownloadに画像の抽出条件を追加しました。
- V4 BulkUploadSampleのgetBulkUploadStatusのレスポンスに画像の処理件数を追加しました。
- V4 ReportDownloadSampleについて定期レポートに対応しました。

2012/12/03:
- V4 画像配信に対応しました。

2012/10/09:
- V4 BulkServiceのアップロードに対応しました。

2012/09/19:
- V4 BulkServiceのダウンロードに対応しました。

2012/09/05:
- V4 APIに対応しました。

2012/04/17:
- conf/api_config.phpファイルのproduction環境用LOCATIONの設定値をlocation.im.yahooapis.jpに変更しました。


--------------------------------
【概要】
--------------------------------
このサンプルプログラムは、PHPを使用して各APIを呼び出す処理サンプルです。
PHPのSoapClientライブラリを使用してAPIを呼び出す形になっています。


--------------------------------
【内容物】
--------------------------------
■confディレクトリ
サンプルプログラム実行時の各種設定を記述するPHPファイルが格納されています。

- api_config.php：各種IDを記述する設定ファイルです。

■srcディレクトリ
以下の各プログラムが格納されています。

・以下は直接実行できるサンプルプログラムです。

- AccountAdProductSample.php  ：AccountAdProductServiceによるアカウント商品一覧の参照処理のサンプルです。
- AccountSample.php           ：AccountServiceによるアカウント参照、更新処理のサンプルです。
- AdSample.php                ：CampaignService, AdGroupService, AdGroupAdService, AdGroupTargetServiceによる入稿処理のサンプルです。
- AuditLogDownloadSample.php  ：AuditLogServiceを使用した操作履歴ログダウンロード処理のサンプルです。
- BalanceSample.php           ：BalanceServiceによるアカウント残高参照処理のサンプルです。
- BulkDownloadSample.php      ：BulkServiceによるダウンロード処理のサンプルです。
- BulkUploadSample.php        ：BulkServiceによるアップロード処理のサンプルです。
- ConversionTrackerSample.php ：ConversionTrackerServiceによるコンバージョン情報の登録、更新処理のサンプルです。
- DictionarySample.php        ：DictionaryServiceによる地域データ、審査否認理由、ターゲット設定用マスタデータ参照処理のサンプルです。
- MediaSample.php             ：AdSample.phpにMediaServiceを加えた画像広告の入稿処理のサンプルです。
- ReportDownloadSample.php    ：ReportDefinitionService, ReportServiceを使用したレポートダウンロード処理のサンプルです。
- RetargetingSample.php       ：RetargetingTagService, RetargetingListServiceを使用したリターゲティング処理のサンプルです。
- SearchKeywordSample.php     ：SearchKeywordIdeaService,SearchKeywordListServiceを使用したサーチターゲティング処理のサンプルです。
- PlacementUrlSample.php      ：PlacementUrlIdeaService,PlacementUrlListServiceを使用したプレイスメントターゲティング処理のサンプルです。
- StatsSample.php             ：StatsServiceを使用した統計情報処理のサンプルです。

・以下は各サンプルプログラムから利用されるクラスです。

- Service.class.php        ：SoapClientを拡張してRequestHeaderの設定処理を追加したクラスのサンプルです。
- SoapUtils.class.php      ：LocationServiceを使用したリクエスト先の取得処理のサンプル及びその他共通処理です。

■downloadディレクトリ
ReportDownloadSample、BulkDownloadSample、BulkUploadSample、AuditLogDownloadSampleを実行した際に、ダウンロードしたデータがファイルとして格納されるディレクトリです。

■uploadディレクトリ
MediaSample、BulkUploadSample、FeedUploadSampleでアップロードするファイルをあらかじめ格納しておくディレクトリです。


--------------------------------
【環境設定】
--------------------------------
ご使用のオペレーティング・システムが、Unix系OSまたはWindowsに拘わらず、PHPの動作環境を構築するために、以下のものをインストールしてください。

・PHP 5.3.13、またはそれ以上のバージョンをインストールします。
・また、インストールする際は、以下のオプションが有効になるようにしてください。
　(1)日本語の使用
　(2)SOAP拡張モジュールの使用
　(3)openssl

confディレクトリ配下にあるapi_config.phpに各IDを記述します。
LOCATION            : リクエスト先毎にコメントアウトを外してください。
LICENSE             : APIライセンスを記述(必須)
APIACCOUNTID        : APIアカウントIDを記述(必須)
APIACCOUNTPASSWORD  : APIアカウントパスワードを記述(必須)
ONBEHALFOFACCOUNTID : 代行アカウントを記述(任意)
ONBEHALFOFPASSWORD  : 代行アカウントパスワードを記述(任意)
ACCOUNTID           : アカウントIDを記述(必須)


--------------------------------
【実行】
--------------------------------
サンプルプログラムのzipを展開したディレクトリに移動します。
各サンプルプログラムを実行します。

■実行例
---------------------------------------
$ php src/AccountSample.php
$ php src/AccountAdProductSample.php
$ php src/AdSample.php
$ php src/AuditLogDownloadSample.php
$ php src/BalanceSample.php
$ php src/BulkDownloadSample.php
$ php src/BulkUploadSample.php
$ php src/ConversionTrackerSample.php
$ php src/DictionarySample.php
$ php src/MasterDataSample.php
$ php src/MediaSample.php
$ php src/ReportDownloadSample.php
$ php src/RetargetingSample.php
$ php src/SearchKeywordSample.php
$ php src/PlacementUrlSample.php
$ php src/StatsService.php
---------------------------------------

データをダウンロードする処理を実行した場合には、downloadディレクトリにファイルが格納されます。

データをアップロードする処理を実行する場合には、あらかじめuploadディレクトリ配下にアップロードしたいファイルを格納しておく必要があります。
サンプルプログラムごとにファイル名は固定です。

・MediaSample.phpの場合　　　 ：SampleMedia.jpg
・BulkUploadSample.phpの場合　：SampleBulkUpload.csv
