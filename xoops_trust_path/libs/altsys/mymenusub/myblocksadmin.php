<?php
/**
 * Altsys library (UI-Components) for D3 modules
 *
 * @package    Altsys
 * @version    XCL 2.3.1
 * @author     Other authors gigamaster, 2020 XCL/PHP7
 * @author     Gijoe (Peak)
 * @copyright  (c) 2005-2022 Author
 * @license    https://github.com/xoopscube/xcl/blob/master/GPL_V2.txt
 */

if ( ! defined( 'XOOPS_ROOT_PATH' ) ) {
	exit;
}

$core_type = altsys_get_core_type();
$db        = XoopsDatabaseFactory::getDatabaseConnection();

$current_dirname = preg_replace( '/[^0-9a-zA-Z_-]/', '', @$_GET['dirname'] );
if ( '__CustomBlocks__' == $current_dirname ) {
	return;
}

$module_handler4menu = xoops_gethandler( 'module' );
$criteria4menu       = new CriteriaCompo( new Criteria( 'isactive', 1 ) );
//$criteria4menu->add(new Criteria('hasmain', 1));
$criteria4menu->add( new Criteria( 'mid', '1', '>' ) );
$modules4menu  = $module_handler4menu->getObjects( $criteria4menu, true );
$system_module = $module_handler4menu->get( 1 );
if ( is_object( $system_module ) ) {
	array_unshift( $modules4menu, $system_module );
}

$adminmenu = [];
foreach ( $modules4menu as $m4menu ) {

	$block_desc = '';

	if ( $m4menu->getVar( 'dirname' ) == $current_dirname ) {
		$adminmenu[] = [
			'selected' => true,
			'title'    => $m4menu->getVar( 'name', 'n' ) . $block_desc,
			'link'     => '?mode=admin&lib=altsys&page=myblocksadmin&dirname=' . $m4menu->getVar( 'dirname', 'n' ),
		];

	} else {
		$adminmenu[] = [
			'selected' => false,
			'title'    => $m4menu->getVar( 'name', 'n' ) . $block_desc,
			'link'     => '?mode=admin&lib=altsys&page=myblocksadmin&dirname=' . $m4menu->getVar( 'dirname', 'n' ),
		];
	}
}


// display
require_once XOOPS_TRUST_PATH . '/libs/altsys/class/D3Tpl.class.php';

$tpl = new D3Tpl();
$tpl->assign( array(
	'adminmenu' => $adminmenu,
	'mypage'    => 'myblocksadmin',
) );

$tpl->display( 'db:altsys_inc_menu_sub.html' );
