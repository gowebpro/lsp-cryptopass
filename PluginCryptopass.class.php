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
     * Инициализация плагина
     */
    public function Init()
    {
        return true;
    }
}
