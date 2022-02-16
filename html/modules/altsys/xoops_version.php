<?php
/**
 * Altsys library (UI-Components) for D3 modules
 * @package    Altsys
 * @version    2.3.1
 * @author     Other authors gigamaster, 2020 XCL/PHP7
 * @author     Gijoe (Peak)
 * @copyright  Copyright 2005-2021 Gijoe (Peak)
 * @license    https://github.com/xoopscube/xcl/blob/master/GPL_V2.txt
 */

if (! defined('XOOPS_TRUST_PATH')) {
    die('set XOOPS_TRUST_PATH into mainfile.php') ;
}

$mydirname = basename(__DIR__) ;
$mydirpath = __DIR__;

$mytrustdirname = 'altsys' ;

require XOOPS_TRUST_PATH.'/libs/'.$mytrustdirname.'/xoops_version.php' ;
