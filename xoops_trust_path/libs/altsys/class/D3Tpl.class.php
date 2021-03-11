<?php

require_once XOOPS_ROOT_PATH . '/class/template.php';
require_once XOOPS_TRUST_PATH . '/libs/altsys/include/altsys_functions.php';

/**
 * Class D3Tpl
 */
class D3Tpl extends XoopsTpl
{
    //HACK by domifara

    //  public function D3Tpl()

    /**
     * D3Tpl constructor.
     */

    public function __construct()
    {
        parent::__construct();

        if (in_array(altsys_get_core_type(), [ALTSYS_CORE_TYPE_X20S, ALTSYS_CORE_TYPE_X23P], true)) {
            array_unshift($this->plugins_dir, XOOPS_TRUST_PATH . '/libs/altsys/smarty_plugins');
        }

        // for RTL users

//        @define('_GLOBAL_LEFT', (1 == @_ADM_USE_RTL ? 'right' : 'left'));
        @define('_GLOBAL_LEFT', (defined('_ADM_USE_RTL') && _ADM_USE_RTL) ? 'right' : 'left');

//        @define('_GLOBAL_RIGHT', 1 == @_ADM_USE_RTL ? 'left' : 'right');
        @define('_GLOBAL_RIGHT', (defined('_ADM_USE_RTL') && _ADM_USE_RTL) ? 'left' : 'right');
    }
}
