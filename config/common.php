<?php

return [

    /*
    |--------------------------------------------------------------------------
    | site settings
    |--------------------------------------------------------------------------
    |
    */

    'contacts' => [
        'phone' => '+79182999009',                  // контактный телефон
        'phoneFormatted' => '+7-918-299-9009',      // контактный телефон отформатированный
        'email' => 'info@ses-life.ru',              // email который отображается на сайте
        'fromEmail' => env('MAIL_FROM_ADDRESS'),    // email с которого идет рассылка
        'toEmail' => [                              // адреса, на которые идет рассылка
            'lifenvrsk@yandex.ru',
            'lavshuk87@mail.ru'
        ]
    ],

    //разрешенные страницы
    'pages' => [
        'services',
        'about',
        'advice',
        'contacts',
    ],
    //разрешенные услуги
    'services' => [
        'dezinsection',
        'deratization',
        'dezinfection',
        'dezodoration',
    ],



];
