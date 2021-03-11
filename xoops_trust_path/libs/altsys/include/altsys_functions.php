<?php

altsys_set_module_config();

function altsys_set_module_config()
{
    global $altsysModuleConfig, $altsysModuleId;

    $module_handler = xoops_getHandler('module');

    $module = $module_handler->getByDirname('altsys');

    if (is_object($module)) {
        $configHandler = xoops_getHandler('config');

        $altsysModuleConfig = $configHandler->getConfigList($module->getVar('mid'));

        $altsysModuleId = $module->getVar('mid');
    } else {
        $altsysModuleConfig = [];

        $altsysModuleId = 0;
    }

    // for RTL users

    //    @define('_GLOBAL_LEFT', 1 == @_ADM_USE_RTL ? 'right' : 'left');
    //    @define('_GLOBAL_RIGHT', 1 == @_ADM_USE_RTL ? 'left' : 'right');

    // LTR or RTL
    if (defined('_ADM_USE_RTL')) {
        //        @define('_GLOBAL_LEFT', (1 == @_ADM_USE_RTL ? 'right' : 'left'));
        @define('_GLOBAL_LEFT', (defined('_ADM_USE_RTL') && _ADM_USE_RTL) ? 'right' : 'left');
        //        @define('_GLOBAL_RIGHT', 1 == @_ADM_USE_RTL ? 'left' : 'right');
        @define('_GLOBAL_RIGHT', (defined('_ADM_USE_RTL') && _ADM_USE_RTL) ? 'left' : 'right');

        //    } else {
        //        @define('_ALIGN_START', 'left'); // change it right for RTL
        //        @define('_ALIGN_END', 'right');  // change it left for RTL
    }
}

function altsys_include_mymenu()
{
    global $xoopsModule, $xoopsConfig, $mydirname, $mydirpath, $mytrustdirname, $mytrustdirpath, $mymenu_fake_uri;

    $mymenu_find_paths = [
        $mydirpath . '/admin/mymenu.php',
        $mydirpath . '/mymenu.php',
        $mytrustdirpath . '/admin/mymenu.php',
        $mytrustdirpath . '/mymenu.php',
    ];

    foreach ($mymenu_find_paths as $mymenu_find_path) {
        if (is_file($mymenu_find_path)) {
            include $mymenu_find_path;

            include_once __DIR__ . '/adminmenu_functions.php';

            altsys_adminmenu_insert_mymenu($xoopsModule);

            altsys_adminmenu_hack_ft();

            break;
        }
    }
}

/**
 * @param $type
 */
function altsys_include_language_file($type)
{
    $mylang = $GLOBALS['xoopsConfig']['language'];

    if (is_file(XOOPS_ROOT_PATH . '/modules/altsys/language/' . $mylang . '/' . $type . '.php')) {
        include_once XOOPS_ROOT_PATH . '/modules/altsys/language/' . $mylang . '/' . $type . '.php';
    } elseif (is_file(XOOPS_TRUST_PATH . '/libs/altsys/language/' . $mylang . '/' . $type . '.php')) {
        include_once XOOPS_TRUST_PATH . '/libs/altsys/language/' . $mylang . '/' . $type . '.php';
    } elseif (is_file(XOOPS_ROOT_PATH . '/modules/altsys/language/english/' . $type . '.php')) {
        include_once XOOPS_ROOT_PATH . '/modules/altsys/language/english/' . $type . '.php';
    } elseif (is_file(XOOPS_TRUST_PATH . '/libs/altsys/language/english/' . $type . '.php')) {
        include_once XOOPS_TRUST_PATH . '/libs/altsys/language/english/' . $type . '.php';
    }
}

define('ALTSYS_CORE_TYPE_X20', 1); // 2.0.0-2.0.13 and 2.0.x-JP
define('ALTSYS_CORE_TYPE_X20S', 2); // 2.0.14- from xoops.org (Skalpa's S)
define('ALTSYS_CORE_TYPE_ORE', 4); // ORETEKI by marijuana
define('ALTSYS_CORE_TYPE_X22', 8); // 2.2 from xoops.org
define('ALTSYS_CORE_TYPE_X23P', 10); // 2.3 from xoops.org (phppp's P)
define('ALTSYS_CORE_TYPE_X25', 11); // 2.5 from xoops.org
define('ALTSYS_CORE_TYPE_ICMS', 12); // ImpressCMS
define('ALTSYS_CORE_TYPE_XCL21', 16); // XOOPS Cube 2.1 Legacy

/**
 * @return int|null
 */
function altsys_get_core_type()
{
    static $result = null;

    if (empty($result)) {
        if (defined('XOOPS_ORETEKI')) {
            $result = ALTSYS_CORE_TYPE_ORE;
        } elseif (defined('XOOPS_CUBE_LEGACY')) {
            $result = ALTSYS_CORE_TYPE_XCL21;
        } elseif (defined('ICMS_VERSION_NAME')) {
            $result = ALTSYS_CORE_TYPE_ICMS;
        } elseif (mb_strstr(XOOPS_VERSION, 'JP')) {
            $result = ALTSYS_CORE_TYPE_X20;
        } else {
            $versions = array_map('intval', explode('.', preg_replace('/[^0-9.]/', '', XOOPS_VERSION)));

            if (2 == $versions[0] && 2 == $versions[1]) {
                $result = ALTSYS_CORE_TYPE_X22;
            } elseif (2 == $versions[0] && 0 == $versions[1] && $versions[2] > 13) {
                $result = ALTSYS_CORE_TYPE_X20S;
            } elseif (2 == $versions[0] && $versions[1] >= 5) {
                $result = ALTSYS_CORE_TYPE_X25;
            } elseif (2 == $versions[0] && $versions[1] > 2) {
                $result = ALTSYS_CORE_TYPE_X23P;
            } else {
                $result = ALTSYS_CORE_TYPE_X20;
            }
        }
    }

    return $result;
}

/**
 * @param $mid
 * @param $coretype
 * @return string
 */
function altsys_get_link2modpreferences($mid, $coretype)
{
    switch ($coretype) {
        case ALTSYS_CORE_TYPE_X20:
        case ALTSYS_CORE_TYPE_X20S:
        case ALTSYS_CORE_TYPE_ORE:
        case ALTSYS_CORE_TYPE_X22:
        case ALTSYS_CORE_TYPE_X23P:
        case ALTSYS_CORE_TYPE_ICMS:
        default:
            return XOOPS_URL . '/modules/system/admin.php?fct=preferences&op=showmod&mod=' . $mid;
        case ALTSYS_CORE_TYPE_XCL21:
            return XOOPS_URL . '/modules/legacy/admin/index.php?action=PreferenceEdit&confmod_id=' . $mid;
    }
}

/**
 * @param $tpl_id
 */
function altsys_template_touch($tpl_id)
{
    if (in_array(altsys_get_core_type(), [ALTSYS_CORE_TYPE_X20S, ALTSYS_CORE_TYPE_X23P, ALTSYS_CORE_TYPE_X25], true)) {
        // need to delete all files under templates_c/

        altsys_clear_templates_c();
    } else {
        // just touch the template

        xoops_template_touch($tpl_id);
    }
}

function altsys_clear_templates_c()
{
    $dh = opendir(XOOPS_COMPILE_PATH);

    while ($file = readdir($dh)) {
        if ('.' == mb_substr($file, 0, 1)) {
            continue;
        }

        if ('.php' != mb_substr($file, -4)) {
            continue;
        }

        @unlink(XOOPS_COMPILE_PATH . '/' . $file);
    }

    closedir($dh);
}
