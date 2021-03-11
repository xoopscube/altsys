<?php
// $Id: MyBlocksAdminForXCL21.class.php ,ver 0.0.7.1 2011/01/27 16:10:00 domifara Exp $

require_once __DIR__ . '/MyBlocksAdmin.class.php';

/**
 * Class MyBlocksAdminForXCL21
 */
class MyBlocksAdminForXCL21 extends MyBlocksAdmin
{
    public function MyBlocksAadminForXCL21()
    {
    }

    //HACK by domifara for php5.3+

    //function getInstance()

    /**
     * @return \MyBlocksAdminForXCL21
     */

    public static function getInstance()
    {
        static $instance;

        if (!isset($instance)) {
            $instance = new self();

            $instance->construct();
        }

        return $instance;
    }

    // virtual

    // options

    /**
     * @param $block_data
     * @return mixed
     */

    public function renderCell4BlockOptions($block_data)
    {
        if ($this->target_dirname && '_' != mb_substr($this->target_dirname, 0, 1)) {
            $langman = D3LanguageManager::getInstance();

            $langman->read('admin.php', $this->target_dirname);
        }

        $bid = (int)$block_data['bid'];

        //HACK by domifara

        //  $block = new XoopsBlock( $bid ) ;

        $handler = xoops_getHandler('block');

        $block = $handler->create(false);

        $block->load($bid);

        $legacy_block = Legacy_Utils::createBlockProcedure($block);

        return $legacy_block->getOptionForm();
    }

    /**
     * @return bool
     */

    public function checkFck()
    {
        return (!altsysUtils::isInstalledXclHtmleditor() && file_exists(XOOPS_ROOT_PATH . '/common/fckeditor/fckeditor.js'));
    }
}
