![X-Updare Store](https://img.shields.io/website?down_color=red&down_message=Offline&label=X-Update%20Store&style=for-the-badge&up_color=308311&up_message=online&url=https%3A%2F%2Fxoopscube.xyz%2Fuploads%2Fxupdatemaster%2Fstores_json_V1.txt)
[![XOOPSCube powered-by-electricity](https://img.shields.io/badge/Powered%20by-Electricity-face74?style=for-the-badge&labelColor=203244&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjQgMjQiPjxwYXRoIGZpbGw9IiNmYWNlNzQiIGQ9Ik0xNC42OSAyLjIxTDQuMzMgMTEuNDljLS42NC41OC0uMjggMS42NS41OCAxLjczTDEzIDE0bC00Ljg1IDYuNzZjLS4yMi4zMS0uMTkuNzQuMDggMS4wMWMuMy4zLjc3LjMxIDEuMDguMDJsMTAuMzYtOS4yOGMuNjQtLjU4LjI4LTEuNjUtLjU4LTEuNzNMMTEgMTBsNC44NS02Ljc2Yy4yMi0uMzEuMTktLjc0LS4wOC0xLjAxYS43Ny43NyAwIDAgMC0xLjA4LS4wMnoiLz48L3N2Zz4=)](https://github.com/xoopscube)
[![XCL](https://img.shields.io/badge/XCL-Made%20with%20passion-b0201d?style=for-the-badge&labelColor=991015&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjQgMjQiPjxwYXRoIGZpbGw9IndoaXRlIiBkPSJtMTIgMjEuMzVsLTEuNDUtMS4zMkM1LjQgMTUuMzYgMiAxMi4yNyAyIDguNUMyIDUuNDEgNC40MiAzIDcuNSAzYzEuNzQgMCAzLjQxLjgxIDQuNSAyLjA4QzEzLjA5IDMuODEgMTQuNzYgMyAxNi41IDNDMTkuNTggMyAyMiA1LjQxIDIyIDguNWMwIDMuNzctMy40IDYuODYtOC41NSAxMS41M0wxMiAyMS4zNVoiLz48L3N2Zz4=)](https://github.com/xoopscube)

[![Project Status: Active – The project has reached a stable, usable state and is being actively developed.](https://www.repostatus.org/badges/2.0.0/active.svg)](https://github.com/xoopscube/altsys)
![License GPL](https://img.shields.io/badge/License-GPL-green)
![X-Updare Store](https://img.shields.io/badge/XOOPSCube%20Package-XCL-blue)

## ///// — AltSys UI Component Library

![alt text](https://repository-images.githubusercontent.com/8041517/16f372e9-91e2-4ff8-8d79-ccbb6b2ad0d9)


MODULE | ALTSYS
------------ | -------------
Description | UI Component Library to create and manage Blocks, Templates, Localization
Render Engine | Smarty v2 and XCube Layout
Version | 2.33.0
Author | Nobuhiro Yasutomi @nbuy XCL PHP8  
Author | Nuno Luciano @gigamaster XCL PHP7  
Author | GiJoe ( peak.ne.jp ) Original work
Copyright | 2005-2023 Authors
License | GPL


##### :computer: The Minimum Requirements



          Apache, Nginx, etc. PHP 7.2.x - PHP 8.2
          MySQL 5.6, MariaDB  InnoDB utf8 / utf8mb4
          XCL version 2.3.x



-----


## ALTSYS - alternative system module & library (en, ja)

## SUMMARY

UI Common Library to create custom Blocks and Templates.  
Manage modules Blocks, Templates, and translations.  
GUI for Localization.  


### INSTALL

- set XOOPS_TRUST_PATH into mainfile.php
- copy xoops_trus_path/libs/ in the archive into XOOPS_TRUST_PATH/
- copy html/modules/altsys in the archive into XOOPS_ROOT_PATH/modules/
- install it


### FEATURES

- easy block administration 
- easy permission adminstration
- easy copy/delete/edit any DB templates
- easy import/export any DB templates
- displaying diff between each version of templates
- finding the template you want to edit easily
- making an Extension for Dreamweaver to edit templates
- modifying adminmenu in the left side of XOOPS 2.0.x easier
- displaying admin controll panels in any conventional themes
- supporting three types of template auto-updating into the DB
- modifying operations/developments of any versions of core (X2,XCL2.1,ImpressCMS etc.) efficient


#### DB template auto-updating feature

This feature make your customization/development of DB templates much efficient.
Altsys supports three types of auto-updating the templates stored in Database.

1. auto-updating templates under ```theme/templates/module-name```
This feature is useful for developper of site/theme.
Insert a line just after including common.php of mainfile.php.  
  
```diff
include XOOPS_ROOT_PATH."/include/common.php";
		
+ include XOOPS_TRUST_PATH."/libs/altsys/include/autoupdate_from_theme.inc.php" ;
		
``` 

Then, any modification to templates in ```/themes/(your_theme)/templates/```  
will be automatically updated into your Database.  

2. auto-updating template under ```module/templates```  
This feature is useful for developper of modules.  
Insert two lines just after including common.php of mainfile.php  

```diff
include XOOPS_ROOT_PATH."/include/common.php";

+	$tplsadmin_autoupdate_dirnames = array( '(your_module)' ) ;
+	include XOOPS_TRUST_PATH."/libs/altsys/include/autoupdate_from_module.inc.php" ;
```
Then, any modification to templates in ```/modules/(your_module)/templates/```  
will be automatically updated into your Database.  

You can specify multiple modules e.g.: ```array( 'piCal' , 'pico', 'd3forum' )```  

3. auto-updating template under TRUST_PATH  
This feature is useful for developper of D3 modules.  
Insert two lines just after including common.php of mainfile.php  

```diff
include XOOPS_ROOT_PATH."/include/common.php";

+	$tplsadmin_autoupdate_mydirnames = array( 'pico' , 'd3forum' ) ;
+	include XOOPS_TRUST_PATH."/libs/altsys/include/autoupdate_from_d3module.inc.php" ;
```

Then, any modification to templates in ```TRUST_PATH/modules/pico/templates/```  
and ```TRUST_PATH/modules/d3forum/templates/*```  
will be automatically updated into your Database.


### Admin in theme

You can display admin side in the theme for XOOPS.
This must be useful for accessibility or mobile.

You have to make some patch for enabling this feature.

1. XOOPS2.x.x  
Insert a line just after including common.php of mainfile.php.
```php
		include XOOPS_TRUST_PATH.'/libs/altsys/include/admin_in_theme.inc.php' ;
```

2. XOOPSCube Legacy 2.1.x  
Insert some lines into settings/site_custom.ini.php (this should be already available)  

```
[RenderSystems]
Legacy_AdminRenderSystem=Legacy_AltsysAdminRenderSystem

[Legacy_AltsysAdminRenderSystem]
path=/modules/altsys/include
class=Legacy_AltsysAdminRenderSystem
```

3. XOOPS 2.2 and ORETEKI  
Not supported yet

### Usage  

Specify the theme for the admin theme in the preferences of altsys.  
This means that you can specify different themes between public and admin.  
If you disable "admin in theme", just left it blank here.  

If you want to show a block in the admin, set the target to "ALTSYS"  


### Admin menu hack 
  
Even if you turn "admin in theme" disabled, you can modify the admin menu  
in the left side of admin area - only for versions 2.0.x

Just change "Rewrite admin menu" in altsys's preferences.  
This is not a core hack but a cache hack.  
If your admin area is broken, just remove cache/adminmenu.  


### Language constants override system 

mylangadmin allows you to override the language constants of each module.

But, there are a hardle to enable this feature.

- You always override constants of module using D3LanguageManager natively.

- With core XoopsCube Legacy2.1.x, you can use this feature with conventional modules just by copying preload/SetupAltsysLangMgr.class.php

- With conventinal core of XOOPS2, you have to hack the core. (follow the instruction in mylangadmin)


## ALTSYS - 代替システムモジュール＆ライブラリ

●要旨

使いづらいシステムモジュールの代わりとして作ってきたblocksadminやtplsadminといったコアに関する操作を統合したモジュールです。

Duplicatable V3モジュールから、ライブラリとして利用できる形にしたため、構造から大きく見直しています。
バグ報告を大歓迎します。

今後は、avamanも吸収し、私自身のメンテナンスを楽にしたいと思います。


●インストール

- mainfile.php にて XOOPS_TRUST_PATH を設定してください
- アーカイブのxoops_trus_path/内を、XOOPS_TRUST_PATHに展開してください
- アーカイブのhtml/内を、XOOPS_ROOT_PATHに展開してください
- モジュールとしてインストールしてください
- 管理画面テーマ機能を利用する場合は、下の手順に従ってください


●アップデート

0.2x や 0.3x からのアップデートでは、公開側(XOOPS_ROOT_PATH/modules/altsys)をいったん消してから、上書きしてください。

0.4から、altsysは見かけ上メイン部を持つようになりました。メインメニューなどに、ALTSYSが表示されて困る場合は、モジュール管理から表示順を0に変更してください。


●機能

- X2コアよりも判りやすくブロック管理ができます
- X2コアよりも判りやすく権限管理ができます
- 本来DBテンプレートが持つ性能を活かした形で編集できます
- テンプレートのインポート/エクスポートが自由自在です
- テンプレート編集の差分を表示します
- 対象テンプレートを見つけやすくできます
- テンプレート編集をしやすくするためのDreamWeaver用Extensionを自動生成します
- X2管理画面の管理メニュー部分を表示改善できます
- 管理画面を通常テーマで表示することができます（管理画面テーマ機能参照）
- テンプレート自動更新機能を提供します（テンプレート自動更新機能参照）
- X2, XCL2.1, ImpressCMS等、あらゆるコアの操作性・開発効率を向上します


●テンプレート自動更新機能

DBテンプレートをローカルで編集する際には、ファイルを更新するだけで、自動的にDBテンプレートへ反映してくれる機能があると、とても開発効率が向上します。altsysでは、3つのパターンを提供します。  
  
1. テーマ内テンプレート自動更新機能   

サイトやテーマ開発者にとって便利な機能です。 
mainfile.phpのcommon.php読込行の直後に、以下のように１行挿入します。 

```diff
	include XOOPS_ROOT_PATH."/include/common.php";

+	include XOOPS_TRUST_PATH."/libs/altsys/include/autoupdate_from_theme.inc.php" ;

```

これにより、選択されたテーマ内のtemplates/フォルダ内に置かれたテンプレートを自動的に読み込むようになります。
  
2. モジュール内テンプレート自動更新機能  

モジュール開発者にとって便利な機能です。 

mainfile.phpのcommon.php読込行の直後に、以下のように２行挿入します。  

```
	include XOOPS_ROOT_PATH."/include/common.php";

+	$tplsadmin_autoupdate_dirnames = array( 'piCal' ) ;
+	include XOOPS_TRUST_PATH."/libs/altsys/include/autoupdate_from_module.inc.php" ;

```

このように記述することで、piCalモジュールのテンプレートの元ファイルを編集するだけで、即時にデータベースに反映されます。includeする前に、$tplsadmin_autoupdate_dirnamesに配列をセットしておくことが重要です。  

もちろん複数のモジュールを同時指定することも可能です。array( 'piCal' , 'tinyd0' ) のように指定します。  

3. TRUST_PATH内テンプレート自動更新機能  

D3モジュール開発者にとって便利な機能です。  
mainfile.phpのcommon.php読込行の直後に、以下のように２行挿入します。  

```diff
	include XOOPS_ROOT_PATH."/include/common.php";

+	$tplsadmin_autoupdate_mydirnames = array( 'pico' , 'd3forum' ) ;
+	include XOOPS_TRUST_PATH."/libs/altsys/include/autoupdate_from_d3module.inc.php" ;
```

このように記述することで、picoモジュールやd3forumのテンプレートの元ファイルを編集するだけで、即時にデータベースに反映されます。includeする前に、$tplsadmin_autoupdate_mydirnamesに配列をセットしておくことが重要です。  

1～(3)のいずれも、併用が可能です。  


●管理画面テーマ機能

管理画面を、公開画面用のテーマで表示します。これにより、管理画面も公開画面も同じ画面でシームレスに利用できるようになり、利用者にとっての違和感がなくなるメリットがあります。使い勝手全体も、テーマ・テンプレートレベルでいくらでも向上させることができます。

コアタイプによって有効化する方法が違います。（俺的とXOOPS2.2には対応していません） 

1. XOOPS2.0.x

mainfile.php のcommon.php読込行の直後に、以下の１行を挿入します。 

```php
		include XOOPS_TRUST_PATH.'/libs/altsys/include/admin_in_theme.inc.php' ;
```

無効化するには、この１行を削除してください。  

2. XOOPS Cube Legacy 2.1  

settings/site_custom.ini.php に以下の行を挿入します。（このファイルがなければ作る）  

```
[RenderSystems]
Legacy_AdminRenderSystem=Legacy_AltsysAdminRenderSystem

[Legacy_AltsysAdminRenderSystem]
path=/modules/altsys/include
class=Legacy_AltsysAdminRenderSystem
```

無効化するには、これらの行を削除してください。  

管理画面テーマは、altsysの一般設定で指定します。  
つまり、公開側テーマと管理側テーマは別々のものを指定できます。  
ここを空欄にするだけでも、管理画面テーマを無効化することができます。  
問題発生時には、この方法を使うのがお勧めです。  

ほとんどのブロックを管理画面テーマに表示することが可能ですが、ブロック管理で「前ページ」と指定しても管理画面には表示されません。ALTSYSモジュールに対して表示指定されたブロックだけが表示されます。管理画面にも公開画面にも表示したいブロックであれば、「全ページ」と「ALTSYS」をCTRL+クリックで両方選択してください。  

管理画面でのハマリを避けるために、管理画面にはかならず管理メニューブロックが表示されます。明示的に表示指定をしていない場合、左ブロックの一番上に強制挿入されます。表示指定されていれば、そのまま表示されます。  


●管理メニュー

0.4から、「管理メニュー」ブロックがaltsysにつきました。ブロック管理から、ALTSYSモジュールに対して表示指定することで、管理画面内にブロック表示されます。もちろんこれは、管理画面テーマが有効になっている場合のみです。

XOOPS2.0.x において、通常管理画面を利用している場合（管理画面テーマを利用していない場合）、altsys一般設定の「管理者用メニューの書き換え」が意味を持ちます。いろいろ試してみてください。これによってもし画面がおかしくなったなら、cache/adminmenu.php というファイルを削除してから、あらためて管理画面に入るだけで復旧します。（確認画面で「はい」を押してください）


●言語ファイルオーバーライド

0.5から言語ファイルオーバーライド機能がaltsysにつきました。言語定数管理から、モジュール->言語->ファイルを選んで、必要な部分を書き換えるだけです。

ただし、これが有効にならないケースも多い点に注意が必要です。

D3LanguageManagerに対応したモジュールであれば、無条件で有効に機能しますが、それ以外のモジュールについては、コアバージョンによる制約があります。

XoopsCube Legacy2.1であれば最も簡単です。アーカイブ添付のpreloadを有効にするだけです。これで一般的なモジュールは書き換え可能です。

従来のXOOPS2について、この機能を有効にするためには、コアHackが必要になってしまいます。言語ファイルの共通読込処理を書き換える形になるため、比較的ハードルも高く、あまりお勧めしません。（やり方もここでは書きません）
