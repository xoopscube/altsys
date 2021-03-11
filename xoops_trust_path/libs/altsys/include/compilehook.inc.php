<?php

/* tplsadmin compiled cache hookings */

// save assigned variables for the template
/**
 * @param $file
 * @param $smarty
 * @return bool
 */
function tplsadmin_save_tplsvars($file, $smarty)
{
    $tplsvars_file = 'tplsvars_';

    $tplsvars_file .= mb_substr(md5(mb_substr(XOOPS_DB_PASS, 0, 4)), 0, 4) . '_';

    if (0 === strncmp($file, 'db:', 3)) {
        $tplsvars_file .= mb_substr($file, 3);
    } elseif (0 === strncmp($file, 'file:', 5)) {
        $tplsvars_file .= strtr(mb_substr($file, 5), '/', '%');
    } else {
        $tplsvars_file .= strtr($file, '/', '%');
    }

    if ($fw = @fopen(XOOPS_COMPILE_PATH . '/' . $tplsvars_file, 'xb')) {
        fwrite($fw, serialize($smarty->_tpl_vars));

        fclose($fw);

        return true;
    }

    return false;
}
