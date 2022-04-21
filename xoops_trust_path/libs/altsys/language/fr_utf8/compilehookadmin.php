<?php
// Syntax const v2.3.0 2021/05/15 @gigamaster XCL-PHP7

const _TPLSADMIN_FMT_MSG_ENCLOSEBYCOMMENT = '%d template caches have been enclosed by tplsadmin comments';
const _TPLSADMIN_DT_ENCLOSEBYCOMMENT = 'Implant comments';
const _TPLSADMIN_DD_ENCLOSEBYCOMMENT = 'Two HTML comments will be implanted in the begging/ending point of each templates. Since this rarely breaks its design, it is recommended to professionals can read HTML itself';
const _TPLSADMIN_CNF_ENCLOSEBYCOMMENT = 'Compiled template caches will be enclosed by tplsadmin comments. Are you OK?';


const _TPLSADMIN_FMT_MSG_ENCLOSEBYBORDEREDDIV = '%d template caches have been enclosed by div tags';
const _TPLSADMIN_DT_ENCLOSEBYBORDEREDDIV = 'Implant div tags';
const _TPLSADMIN_DD_ENCLOSEBYBORDEREDDIV = 'Each templates will be enclosed by black-bordered div tags. A link for editing controller of tplsadmin will be implanted into each templates. Though this often cause destructions in designing, you can edit each templates the most instictively and easily.';
const _TPLSADMIN_CNF_ENCLOSEBYBORDEREDDIV = 'Compiled template caches will be enclosed by div tags. Are you OK?';

const _TPLSADMIN_FMT_MSG_HOOKSAVEVARS = '%d template caches have been implanted hooking logics to collect template varibles';
const _TPLSADMIN_DT_HOOKSAVEVARS = 'Implant logics to collect template variables';
const _TPLSADMIN_DD_HOOKSAVEVARS = 'The first step of getting the informations of template variables in your site. The template vars infos will be collected when public sides of your site is displayed. If all templates you want to edit are displayed, get template vars info by underlying buttons.';
const _TPLSADMIN_CNF_HOOKSAVEVARS = 'Compiled template caches will be implanted the logics to collect template variables. Are you OK?';

const _TPLSADMIN_FMT_MSG_REMOVEHOOKS = '%d template caches have been normalized';
const _TPLSADMIN_DT_REMOVEHOOKS = 'Normalize compiled template caches';
const _TPLSADMIN_DD_REMOVEHOOKS = 'This removes comments/div tags/logics implanted by upper operations from each compiled template caches.';
const _TPLSADMIN_CNF_REMOVEHOOKS = 'Are you OK for normlizing?';


const _TPLSADMIN_MSG_CLEARCACHE = 'Template caches are removed';
const _TPLSADMIN_MSG_CREATECOMPILECACHEFIRST = 'There are no compiled template caches. Create complied template caches by displaying public sides of your site, first';

const _TPLSADMIN_CNF_DELETEOK = 'Delete OK?';


const _TPLSADMIN_DT_GETTPLSVARSINFO_DW = 'Get info of template variables as DreamWeaver Extensions';
const _TPLSADMIN_DD_GETTPLSVARSINFO_DW = 'Open Macromedia Extension Manager, first.<br />Extract the download archive.<br />Execute the files which extensions are .mxi and you will meet installing dialogs.<br />The snippets for template variables of your site will be usable after restarting Dream Weaver.';

const _TPLSADMIN_DT_GETTEMPLATES = 'Download templates';
const _TPLSADMIN_DD_GETTEMPLATES = 'Select a set before pushing either button';

const _TPLSADMIN_FMT_MSG_PUTTEMPLATES = '%d templates are imported.';
const _TPLSADMIN_DT_PUTTEMPLATES = 'Upload templates';
const _TPLSADMIN_DD_PUTTEMPLATES = 'Select a set you want to upload/overwrite before uploading zip/tgz archive including template files (.html). You need not to check depths of the paths in the archive.';


const _TPLSADMIN_ERR_NOTUPLOADED = 'No files are uploaded.';
const _TPLSADMIN_ERR_EXTENSION = 'This extension cannot be recognized.';
const _TPLSADMIN_ERR_INVALIDARCHIVE = 'The archive is not extractable.';
const _TPLSADMIN_ERR_INVALIDTPLSET = 'Invalid set name has been specified.';

const _TPLSADMIN_ERR_NOTPLSVARSINFO = 'There are no template vars info files.';

const _TPLSADMIN_NUMCAP_COMPILEDCACHES = 'Compiled template caches';
const _TPLSADMIN_NUMCAP_TPLSVARS = 'Template vars info files';
