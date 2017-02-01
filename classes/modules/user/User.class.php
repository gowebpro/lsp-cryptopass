<?php
/*-------------------------------------------------------
*
*   Plugin name:    Crypto Password
*   Author:         Chiffa
*   Web:            http://goweb.pro
*
---------------------------------------------------------
*/


class PluginCryptopass_ModuleUser extends PluginCryptopass_Inherit_ModuleUser
{

    /**
     * Генерация хеша пароля
     *
     * @param $sPassword
     * @return string
     */
    public function MakeHashPassword($sPassword)
    {
        $iCryptCost = (int)Config::Get('plugin.cryptopass.encrypt_cost');
        $aParams = [
            'cost' => ($iCryptCost > 2) ? $iCryptCost : 10
        ];
        return password_hash($sPassword, PASSWORD_BCRYPT, $aParams);
    }

    /**
     * Проверка пароля
     *
     * @param $sPassword
     * @param $sHash
     * @return string
     */
    public function VerifyPassword($sPassword, $sHash)
    {
        return password_verify($sPassword, $sHash);
    }

}
