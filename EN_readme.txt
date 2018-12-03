--------------------------------
NOTICE：　Yahoo! Promotional Ads API - For use of sample code
--------------------------------

The sample code of Yahoo! Promotional Ads API is provided to API users only who concluded the contract of "Application to Use Yahoo! Promotional Ads API" with Yahoo Japan Corporation. 

Additionally, please note before using it that Yahoo Japan Corporation may change the contents and the specification of the sample code, and may discontinue providing the sample code without any notice.


--------------------------------
<<Version>>
--------------------------------
Ver.201812

[Update history]
-----------
2018/12/05:
- V201812 video tracking conversion is available.
- V201812 search targeting enhancement is available.

2018/09/19:
- V201809 Correspond to site Retargeting enhancement.
- V201809 Correspond to period of performance data available changed.
- V201809 Correspond to range of Age targeting changed.

2018/06/20:
- V201806 Correspond to change on releasing and numbering new versions.
- V201806 Correspond to displaying cost related indicators with numbers under decimal places.
- V201806 Correspond to adding reporting fields related to video views.
- V201806 Correspond to conversion feature enhancement.

2017/10/25
 - V6.1 Correspond to Mobile App campaign.　
 - V6.1 Correspond to specification of bid multiplier of AdGroupTargetService on AdSample.
 - V6.1 Added report download url to response of ADD of ReportDownloadSample.
 - V6.1 Added Get operation for OS version data, image format data for ads via DictionaryService on DictionarySample.

2017/05/24:
- V6.0 Added VideoSample.
- V6.0 Correspond to Yahoo! DMP.

2016/08/31:
- V5.4 Correspond to Search Targeting (Search Recency/Frequency).
- V5.4 Correspond to specification of multiple campaigns/ad groups of AdGroupAdService on AdSample.

2016/04/20:
- V5.3 Added AuditLogDownloadSample, StatsSample.

2015/11/18:
- V5.2 Correspond to Carrier Targeting.
- V5.2 Added RetargetingSample.

2015/08/05:
- V5.1 Renew the Report API.

2015/04/15:
- V5.0 Correspond to Infeed Ad.

2014/09/04:
- V4.7 Correspond to Dynamic Image Extensions.
- V4.7 Correspond to Converison tracker.

2014/03/26:
- V4.6 Correspond to Placement Targeting.

2014/02/07：
- V4.6 Added Similar User Targeting.
- V4.6 Added Segment Targeting.
- V4.6 Added Frequency Control.
- V4.6 Added Frequency Report.

2013/09/04：
- V4 Added AccountAdProductSample, DictionarySample, SearchKeywordSample.

2013/05/28:
- V4 Correspond to Site Retargeting.

2013/02/27:
- V4 Added bid to AdSample / MediaSample of AdGroupAdService.
- V4 Added Image condition to getBulkDownload of BulkDownloadSample.
- V4 Added Image transactions to response of getBulkUploadStatus of BulkUploadSample.
- V4 Correspond to ReportDownloadSample as scheduled Report.

2012/12/03:
- V4 Correspond to Image (media) display.

2012/10/09:
- V4 Correspond to BulkService upload.

2012/09/19:
- V4 Correspond to BulkService download.

2012/09/05:
- V4 Correspond to API.

2012/04/17:
- Changed the Production LOCATION setting of conf/api_config.php as: "location.im.yahooapis.jp".


--------------------------------
<<Overview>>
--------------------------------
This sample program uses PHP to call each services in API. 
SoapClient library of PHP is required.


--------------------------------
<<Contents>>
--------------------------------
[conf directory]
PHP file is stored in order to describe each setting used in the sample program execution.

- api_config.php: It is the config file to describe each ID.

[src directory]
The following programs are stored.

* Sample programs can be executed directly. 

- AccountAdProductSample.php  : Sample of Get operation for account ad product via AccountAdProductService.
- AccountSample.php           : Sample of Get and Mutate operation for account information via AccountService.
- AdSample.php                : Sample of ad creation via CampaignService/AdGroupService/AdGroupAdService/AdGroupTargetService.
- AuditLogDownloadSample.php  : Sample of Download Operation History via AuditLogService.
- BalanceSample.php           : Sample of Get operation for account balance via BalanceService.
- BulkDownloadSample.php      : Sample of download process via BulkService.
- BulkUploadSample.php        : Sample of upload process via BulkService.
- ConversionTrackerSample.php : Sample of Mutate operation for conversion information via ConversionTrackerService.
- DictionarySample.php        : Sample of Get operation for LOCATION data, rejected reasons, target setting data, OS version data, image format data for ads via DictionaryService.
- MediaSample.php             : Sample of ad creation of Image ads, which MediaService Added to AdSample.php.
- ReportDownloadSample.php    : Sample of Report download via ReportDefinitionService and ReportService.
- RetargetingSample.php       : Sample of Retargeting via RetargetingTagService and RetargetingListService.
- SearchKeywordSample.php     : Sample of Search Targeting via SearchKeywordIdeaService and SearchKeywordListService.
- PlacementUrlSample.php      : Sample of Placement Targeting via PlacementUrlIdeaService and PlacementUrlListService.
- StatsSample.php             : Sample of Get operation for Analytics data via StatsService.
- VideoSample.php             : Sample of ad creation of Video ads, which VideoService Added to AdSample.php.

* Class is called from sample programs.

- Service.class.php        : Sample class Added to RequestHeader setting by the SoapClient extension.
- SoapUtils.class.php      : Sample and other common process of Get operation request via LocationService.

[download directory]
It stores the downloaded file when you execute ReportDownloadSample, BulkDownloadSample, BulkUploadSample or AuditLogDownloadSample.

[upload directory]
It stores the upload file when you execute MediaSample, BulkUploadSample, FeedUploadSample or VideoSample.


--------------------------------
<<Preparation>>
--------------------------------
Please install followings to build operation environment for PHP regardless of whether your OS is Unix or Windows.

- Install PHP 5.3.13 or later version
- When installing, please enable the following options.
 (1) Japanese language module(php_mbstring)
 (2) SOAP module(php_soap,php_xmlrpc)
 (3) openssl module(php_openssl)

Change authentication information of api_config.php under the conf directory.
LOCATION            : Comment out the unnecessary line.
LICENSE             : Enter API license (Required)
APIACCOUNTID        : Enter API Account ID (Required)
APIACCOUNTPASSWORD  : Enter API Account password (Required)
ONBEHALFOFACCOUNTID : Enter Application Account ID (Optional)
ONBEHALFOFPASSWORD  : Enter Application Account password (Optional)
ACCOUNTID           : Enter Account ID (Required)


--------------------------------
<<Execution>>
--------------------------------
Move to the directory stored the zip of sample program.
Execute each sample program.

[e.g.]
---------------------------------------
$ php src/AccountSample.php
$ php src/AccountAdProductSample.php
$ php src/AdSample.php
$ php src/BalanceSample.php
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
$ php src/VideoService.php
---------------------------------------

When data download is executed, the file will be stored to the download directory.

When uploading the data is executed, please store the file you want to upload under the upload directory.
File name is fixed in each sample program. 

 - In case of MediaSample.php       : SampleMedia.jpg
 - In case of BulkUploadSample.php  : SampleBulkUpload.csv
 - In case of VideoSample.php       : SampleVideoUpload.csv
