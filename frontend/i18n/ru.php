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
                'description' => 'Смотри подробней <a href="//php.net/manual/ru/function.password-hash.php" target="_blank">function.password-hash.php</a>',
            ],
        ],
    ],
    'config_sections' => [
        'main' => [
            'name' => 'Основные настройки',
            'description' => 'При изменении этих параметров, всем пользователям придется восстанавливать пароли!',
        ]
    ],
	'activate' => [
		'required' => [
			'php' => 'Для работы плагина требуется версия PHP не ниже %%version%%',
		]
	],
];
