<?php
/*-------------------------------------------------------
*
*   Plugin name:    Crypto Password
*   Author:         Chiffa
*   Web:            http://goweb.pro
*
---------------------------------------------------------
*/

if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginCryptopass extends Plugin
{
    protected $aInherits = [
        'module' => [
            'ModuleUser'
        ]
    ];

    /**
     * Активация плагина
     */
    public function Activate()
    {
        $sPhpVersion = '5.5.0';
        if (version_compare(PHP_VERSION, $sPhpVersion, '<')) {
            $this->Message_AddErrorSingle($this->Lang_Get('plugin.cryptopass.activate.required.php', [ 'version' => $sPhpVersion ]));
            return false;
        }
        $this->ExportSQL(dirname(__FILE__) . '/sql/install.sql');
        return true;
    }

    /**
     * Инициализация плагина
     */
    public function Init()
    {
        return true;
    }
}
