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
        if (version_compare(PHP_VERSION, '5.5.0', '<')) {
            $this->Message_AddErrorSingle('Для работы плагина требуется версия PHP не ниже 5.5.0');
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
