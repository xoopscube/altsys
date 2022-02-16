<?php
/**
 * Altsys library (UI-Components) for D3 modules
 *
 * @package    Altsys
 * @version    XCL 2.3.1
 * @author     Other authors Gigamaster, 2020 XCL PHP7
 * @author     Gijoe (Peak)
 * @copyright  (c) 2005-2022 Author
 * @license    https://github.com/xoopscube/xcl/blob/master/GPL_V2.txt
 */

if ( ! $xoopsConfig['theme_fromfile'] ) {
	return;
}

// templates/ under modules
// $tplsadmin_autoupdate_path = XOOPS_THEME_PATH . '/' . $xoopsConfig['theme_set'] . '/templates' ;

if ( ! is_array( @$tplsadmin_autoupdate_mydirnames ) ) {
	return;
}

foreach ( $tplsadmin_autoupdate_mydirnames as $tplsadmin_mydirname ) {
	$tplsadmin_mydirname = preg_replace( '/[^a-zA-Z0-9_-]/', '', $tplsadmin_mydirname );

	require XOOPS_ROOT_PATH . '/modules/' . $tplsadmin_mydirname . '/mytrustdirname.php';
	$altsys_mid_path           = 'altsys' == $mytrustdirname ? '/libs/' : '/modules/';
	$tplsadmin_autoupdate_path = XOOPS_TRUST_PATH . $altsys_mid_path . $mytrustdirname . '/templates';

	// modules
	if ( $handler = @opendir( $tplsadmin_autoupdate_path . '/' ) ) {
		while ( false !== ( $file = readdir( $handler ) ) ) {
			$file_path = $tplsadmin_autoupdate_path . '/' . $file;
			if ( is_file( $file_path ) ) {
				$mtime    = (int) @filemtime( $file_path );
				$tpl_file = $tplsadmin_mydirname . '_' . $file;
				list( $count ) = $xoopsDB->fetchRow( $xoopsDB->query( 'SELECT COUNT(*) FROM ' . $xoopsDB->prefix( 'tplfile' ) . " WHERE tpl_tplset='" . addslashes( $xoopsConfig['template_set'] ) . "' AND tpl_file='" . addslashes( $tpl_file ) . "' AND tpl_lastmodified >= $mtime" ) );
				if ( $count <= 0 ) {
					include_once XOOPS_TRUST_PATH . '/libs/altsys/include/tpls_functions.php';
					tplsadmin_import_data( $xoopsConfig['template_set'], $tpl_file, implode( '', file( $file_path ) ), $mtime );
				}
			}
		}
	}

}
