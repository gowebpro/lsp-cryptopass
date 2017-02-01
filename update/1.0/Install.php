<?php

class PluginCryptopass_Update_Intstall extends ModulePluginManager_EntityUpdate
{
    /**
     * Выполняется при обновлении версии
     */
    public function up()
    {
        $this->exportSQLQuery('ALTER TABLE `prefix_user` CHANGE `user_password` `user_password` VARCHAR( 500 ) NOT NULL ;');
    }

    /**
     * Выполняется при откате версии
     */
    public function down()
    {

    }
}