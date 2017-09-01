<?php
/*-------------------------------------------------------
*
*   Plugin name:    Crypto Password
*   Author:         Chiffa
*   Web:            http://goweb.pro
*
---------------------------------------------------------
*/


return [
    /*
     * Описание настроек плагина для интерфейса редактирования
     */
    '$config_scheme$' => [
        'encrypt_cost' => [
            'type'        => 'integer',
            'name'        => 'config.main.encrypt_cost.name',
            'description' => 'config.main.encrypt_cost.description',
            'validator'   => [
                'type'   => 'Number',
                'params' => [
                    'min'         => 2,
                    'max'         => 24,
                    'allowEmpty'  => false,
                ]
            ]
        ],
    ],
    /**
     * Описание разделов для настроек
     * Каждый раздел группирует определенные параметры конфига
     */
    '$config_sections$' => [
        [
            'name'         => 'config_sections.main.name',
            'description'  => 'config_sections.main.description',
            'allowed_keys' => [
                'encrypt_cost',
            ]
        ]
    ]
];
