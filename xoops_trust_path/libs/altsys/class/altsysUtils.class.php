<?php
/**
 * Altsys library (UI-Components) for D3 modules
 * Class altsysUtils
 * @package    Altsys
 * @version    XCL 2.3.1
 * @author     Other authors Gigamaster, 2020 XCL PHP7
 * @author     Gijoe (Peak)
 * @copyright  (c) 2005-2022 Author
 * @license    https://github.com/xoopscube/xcl/blob/master/GPL_V2.txt
 */

class altsysUtils
{
    /**
     * @param      $name
     * @param bool $doRegist
     * @return array
     */
    public static function getDelegateCallbackClassNames($name, bool $doRegist = true)
    {
        $names = [];

        if (!class_exists('XCube_Delegate')) {
            return $names;
        }

        if ($doRegist) {
            $delegate = new XCube_Delegate();
            $delegate->register($name);
        }
        $m = XCube_Root::getSingleton()->mDelegateManager;
        if ($m) {
            $delgates = $m->getDelegates();

            if (isset($delgates[$name])) {
                $d_target = $delgates[$name];

                $keys = array_keys($d_target);
                $callbacks = $d_target[$keys[0]]->_mCallbacks;
                foreach (array_keys($callbacks) as $priority) {
                    foreach (array_keys($callbacks[$priority]) as $idx) {
                        $callback = $callbacks[$priority][$idx][0];
                        $_name = (is_array($callback))? ((is_object($callback[0]))? get_class($callback[0]) : $callback[0]) : $callback;
                        $names[$priority] = $_name;
                    }
                }
                ksort($names, SORT_NUMERIC);
            }
        }
        return $names;
    }

    /**
     * @return bool
     */
    public static function isInstalledXclHtmleditor(): bool
    {
        if (defined('LEGACY_BASE_VERSION') && version_compare(LEGACY_BASE_VERSION, '2.2.0.0', '>=')) {
            $cNames = self::getDelegateCallbackClassNames('Site.TextareaEditor.HTML.Show');
            if ($cNames) {
                $last = array_pop($cNames);
                if ('Legacy_TextareaEditor' !== $last) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * @param      $str
     * @param int $flags
     * @param null $encoding
     * @param bool $double_encode
     * @return mixed|string
     */
    public static function htmlSpecialChars($str, int $flags = ENT_COMPAT, $encoding = null, bool $double_encode = true)
    {
        static $php523 = null;
        if (null === $php523) {
            $php523 = PHP_VERSION_ID >= 50203;
        }
        if (null === $encoding) {
            $encoding = defined('_CHARSET') ? _CHARSET : '';
        }
        if ($php523) {
            return htmlspecialchars($str, $flags, $encoding, $double_encode);
        }

        $ret = htmlspecialchars($str, $flags, $encoding);

        if (!$double_encode) {
            $ret = str_replace('&amp;amp;', '&amp;', $ret);
        }

        return $ret;
    }
}
