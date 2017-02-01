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
    'config' => [
        'main' => [
            'encrypt_cost' => [
                'name' => 'Количество раундов подготовки ключей',
                'description' => 'Смотри подробней <a href="//php.net/manual/ru/function.crypt.php">function.crypt.php</a>',
            ],
        ],
    ],
    'config_sections' => [
        'main' => [
            'name' => 'Основные настройки',
            'description' => 'При изменении этих параметров, всем пользователям придется восстанавливать пароли!',
        ]
    ]
];
