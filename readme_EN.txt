--------------------------------
[Version]
--------------------------------
Version 201903

- Change logs
-----------
2019/03/11:
- 201903 is now available.

--------------------------------
[Overview]
--------------------------------
These code samples show how to use APIs through PHP.
We utilize SoapClient Library to call APIs.

--------------------------------
[Contents]
--------------------------------
conf/
  - api_config.ini      : Config files to specify Ids.
src/Jp/YahooApis/YDN/
  - V201903             : PHP Entity classes for written versions (V201903).
  - AdApiSample/
    - Basic/            : Examples of each services of Yahoo! JAPAN Promotional Ads (YDN).
    - Feature/          : Examples of how to create ads, set targeting of Yahoo! JAPAN Promotional Ads (YDN).
    - Repository/       : Utilities which help you use the code samples of Yahoo! JAPAN Promotional Ads (YDN).
    - Util/             : Utilities which help you use the code samples of Yahoo! JAPAN Promotional Ads (YDN).
download/               : Directory where downloaded files stored when using download feature.
upload/                 : Directory where uploaded files stored when using upload feature.


--------------------------------
[Feature]
--------------------------------
src/Jp/YahooApis/YDN/AdApiSample/Feature/
  - LabelSample.php                             : Examples of Label features.
  - DynamicAdsForDisplaySample.php              : Examples of Dynamic Ads for Display features.
  - AdGroupTargetSample.php                     : Examples of targeting features.


--------------------------------
[Development environment]
--------------------------------
Regardless of the operation system you use (wheter windows, unix or not), install software mentioned below.

1. PHP 7.2.x or above
2. Extensions which are written in composer.json
3. Write Ids in conf/api_config.ini like this.
  - location            : choose either sandbox or production environment by removing comment out.
  - license             : API license
  - apiAccountId        : API account id
  - apiAccountPassword  : API account password
  - onBehalfOfAccountId : On Behalf Of Account Id (optional)
  - onBehalfOfPassword  : On Behalf Of Password (optional)
  - accountId           : Account Id (required)


--------------------------------
[How to execute Sample Code]
--------------------------------
Move into the directory where you cloned and execute the command below.

- Example
$ php ./src/Jp/YahooApis/YDN/AdApiSample/Basic/Account/AccountServiceSample.php
$ php ./src/Jp/YahooApis/YDN/AdApiSample/Feature/LabelSample.php

*1　 Downloaded files are stored in "download"directory when downloading data.
*2　 The file is required to be put on "upload" directory before uploading data.

