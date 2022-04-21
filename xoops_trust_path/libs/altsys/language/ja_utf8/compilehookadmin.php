<?php
// Syntax const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

const _TPLSADMIN_FMT_MSG_ENCLOSEBYCOMMENT = '%d 個のコンパイル済テンプレートキャッシュに、コメントを埋め込みました' ;
const _TPLSADMIN_DT_ENCLOSEBYCOMMENT = 'テンプレート名をコメントとして埋め込む' ;
const _TPLSADMIN_DD_ENCLOSEBYCOMMENT = '各テンプレートの開始点および終了点に、HTMLコメントの形でテンプレート名が埋め込まれます。デザイン的な影響も少ないので、HTMLのソースコードを読みこなせる方にお勧めです。' ;
const _TPLSADMIN_CNF_ENCLOSEBYCOMMENT = '現在のコンパイル済テンプレートキャッシュファイルにコメントを埋め込みますか？' ;


const _TPLSADMIN_FMT_MSG_ENCLOSEBYBORDEREDDIV = '%d 個のコンパイル済テンプレートキャッシュに、divタグを埋め込みました' ;
const _TPLSADMIN_DT_ENCLOSEBYBORDEREDDIV = 'テンプレートを枠で囲う' ;
const _TPLSADMIN_DD_ENCLOSEBYBORDEREDDIV = '各テンプレート全体をdiv枠で囲み、該当テンプレートの編集画面へのリンクを埋め込みます。デザインが崩れることもありますが、最も直感的な編集作業ができます。' ;
const _TPLSADMIN_CNF_ENCLOSEBYBORDEREDDIV = '現在のコンパイル済テンプレートキャッシュファイルにdiv枠を埋め込みますか？' ;

const _TPLSADMIN_FMT_MSG_HOOKSAVEVARS = '%d 個のコンパイル済テンプレートキャッシュにテンプレート変数情報取得ロジックを埋め込みました' ;
const _TPLSADMIN_DT_HOOKSAVEVARS = 'テンプレート変数情報取得ロジックの埋め込み' ;
const _TPLSADMIN_DD_HOOKSAVEVARS = 'テンプレート変数情報一覧を取得するための前段階。コンパイル済のテンプレートキャッシュにロジックを埋め込んでから、各ページを表示することで、テンプレート変数情報が蓄積されていきます。適当なタイミングで、下のボタンから情報を取得してください。このロジックを外す際は、コンパイルキャッシュをクリアしてください。' ;
const _TPLSADMIN_CNF_HOOKSAVEVARS = '現在のコンパイル済テンプレートキャッシュファイルに、テンプレート変数情報取得ロジックを埋め込みますか？' ;

const _TPLSADMIN_FMT_MSG_REMOVEHOOKS = '%d 個のコンパイル済テンプレートキャッシュを通常状態に戻しました' ;
const _TPLSADMIN_DT_REMOVEHOOKS = 'テンプレートキャッシュを通常状態に戻す' ;
const _TPLSADMIN_DD_REMOVEHOOKS = 'コンパイル済テンプレートキャッシュから、上の操作によって埋め込まれた部分を削除します。なんらかの不具合が出た場合は、キャッシュファイルを消してください。（自動的に再生成されます）' ;
const _TPLSADMIN_CNF_REMOVEHOOKS = '削除処理を実行しますか？' ;


const _TPLSADMIN_MSG_CLEARCACHE = 'キャッシュをクリアしました' ;
const _TPLSADMIN_MSG_CREATECOMPILECACHEFIRST = 'コンパイルキャッシュが生成されていません。先に、編集目的のページを一通り表示しコンパイルキャッシュが生成されてから、再度このコマンドを実行してください。' ;

const _TPLSADMIN_CNF_DELETEOK = '削除してよろしいですか?' ;


const _TPLSADMIN_DT_GETTPLSVARSINFO_DW = 'テンプレート変数情報をDreamWeaver用に取得する' ;
const _TPLSADMIN_DD_GETTPLSVARSINFO_DW = 'まずは Macromedia Extension Manager がインストールされていることを確認し、起動しておいてください。<br>ダウンロードしたファイルを解凍して、拡張子mxiのファイルを実行することで、お使いのDreamWeaverにExtensionとしてインストールされます。DreamWeaver再起動後に、Snippetから利用できます。' ;

const _TPLSADMIN_DT_GETTEMPLATES = 'テンプレートをダウンロードする' ;
const _TPLSADMIN_DD_GETTEMPLATES = 'テンプレートセットを選択してから、希望のアーカイブタイプボタンを押してください' ;

const _TPLSADMIN_FMT_MSG_PUTTEMPLATES = '%d 個のテンプレートをインポートしました' ;
const _TPLSADMIN_DT_PUTTEMPLATES = 'テンプレートをアップロードする' ;
const _TPLSADMIN_DD_PUTTEMPLATES = '上書きしたいテンプレートセットを選択してから、各テンプレートファイル(.html)をzipかtar.gzにくるんでアップロードしてください。テンプレートファイル名さえ正しければ、パスの深さは気にしなくて構いません' ;


const _TPLSADMIN_ERR_NOTUPLOADED = 'ファイルがアップロードされていません' ;
const _TPLSADMIN_ERR_EXTENSION = '未対応のファイル種別です' ;
const _TPLSADMIN_ERR_INVALIDARCHIVE = 'アーカイブから読み出せません' ;
const _TPLSADMIN_ERR_INVALIDTPLSET = 'テンプレートセット指定が不正です' ;

const _TPLSADMIN_ERR_NOTPLSVARSINFO = 'テンプレート変数情報ファイルが作成されていません' ;

const _TPLSADMIN_NUMCAP_COMPILEDCACHES = 'コンパイル済テンプレートキャッシュ' ;
const _TPLSADMIN_NUMCAP_TPLSVARS = 'テンプレート変数情報ファイル' ;
