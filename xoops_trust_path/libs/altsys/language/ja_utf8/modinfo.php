<?php
// Syntax const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

const _MI_ALTSYS_MODULENAME = 'ALTSYS';
const _MI_ALTSYS_MODULEDESC = 'もっと使いやすいシステム管理を！';

// menus
const _MI_ALTSYS_MENU_CUSTOMBLOCKS = 'カスタムブロック';
const _MI_ALTSYS_MENU_NEWCUSTOMBLOCK = '(新規)';
const _MI_ALTSYS_MENU_MYBLOCKSADMIN = 'ブロック管理';
const _MI_ALTSYS_MENU_MYTPLSADMIN = 'テンプレート管理';
const _MI_ALTSYS_MENU_COMPILEHOOKADMIN = 'テンプレートの高度な操作';
const _MI_ALTSYS_MENU_MYLANGADMIN = '言語定数管理';
const _MI_ALTSYS_MENU_ADVANCEDLANGADMIN = '言語定数の高度な操作';
const _MI_ALTSYS_MENU_MYAVATAR = 'アバター管理';
const _MI_ALTSYS_MENU_MYSMILEY = '顔アイコン管理';

// blocks
const _MI_ALTSYS_BNAME_ADMIN_MENU = '管理メニュー';

// configs
const _MI_ALTSYS_ADMINMENU_HFT = '管理者用メニューの書き換え';
const _MI_ALTSYS_ADMINMENU_HFTDSC = '管理画面左のモジュールメニューを書き換えます。表示がおかしくなったら、なんらかのモジュールをアップデートするか、cache/adminmenu.php を削除してください。XOOPS 2.0.x以外では無視されます。';
const _MI_ALTSYS_AMHFT_OPT_2COL = 'モジュールアイコンの２列表示';
const _MI_ALTSYS_AMHFT_OPT_NOIMG = 'アイコン表示を文字列に改める';
const _MI_ALTSYS_AMHFT_OPT_XCSTY = 'XC Legacy 2.1風にする';

const _MI_ALTSYS_ADMINMENU_IM = 'mymenu対応モジュールの反映';
const _MI_ALTSYS_ADMINMENU_IMDSC = 'mymenu対応モジュールのリンクを、管理画面左のモジュールメニューに反映させます。表示がおかしくなった時の対応法は、上と同じです。XOOPS 2.0.x以外では無視されます。';

const _MI_ALTSYS_ADMIN_IN_THEME = '管理画面用テーマ';
const _MI_ALTSYS_ADMIN_IN_THEMEDSC = '管理画面を表示するテーマ名を指定します。XOOPS 2.0.x 以外では有効になりません。また、mainfile.phpのcommon.php行直後に、<br>include XOOPS_TRUST_PATH.\'/libs/altsys/include/admin_in_theme.inc.php\';<br>の１行を挿入する必要があります';

const _MI_ALTSYS_ENABLEFORCECLONE = '全ブロックを複製可能とする';
const _MI_ALTSYS_ENABLEFORCECLONEDSC = '全てのモジュール所属ブロックを複製可能であると見なします。同時に複数個表示するとおかしくなるブロックがある点には注意が必要です';

const _MI_ALTSYS_IMAGES_DIR = 'イメージファイルディレクトリ';
const _MI_ALTSYS_IMAGES_DIRDSC = 'このモジュール用のイメージが格納されたディレクトリをモジュールディレクトリからの相対パスで指定します。デフォルトはimagesです。';
