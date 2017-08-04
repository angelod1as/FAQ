<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/angel281/public_html/faq/user/config/plugins/email.yaml',
    'modified' => 1501429301,
    'data' => [
        'enabled' => true,
        'from' => 'faq@angelodias.com.br',
        'from_name' => 'FAQ',
        'to' => 'angelo@angelodias.com.br',
        'to_name' => 'Angelo Dias',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => 'angelo@angelodias.com.br',
                'password' => 'Ferneda1,'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
