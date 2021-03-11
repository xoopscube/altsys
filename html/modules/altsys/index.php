<?php

$xoopsOption['nocommon'] = 1;
define('_LEGACY_PREVENT_LOAD_CORE_', true);
require_once \dirname(__DIR__, 2) . '/mainfile.php';

header('Location: ' . XOOPS_URL . '/user.php');
