<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/angel281/public_html/faq/user/plugins/admin/admin.yaml',
    'modified' => 1501428903,
    'data' => [
        'enabled' => true,
        'route' => '/admin',
        'cache_enabled' => false,
        'theme' => 'grav',
        'logo_text' => '',
        'body_classes' => '',
        'content_padding' => true,
        'sidebar' => [
            'activate' => 'tab',
            'hover_delay' => 100,
            'size' => 'auto'
        ],
        'dashboard' => [
            'days_of_stats' => 7
        ],
        'widgets' => [
            'dashboard-maintenance' => true,
            'dashboard-statistics' => true,
            'dashboard-notifications' => true,
            'dashboard-feed' => true,
            'dashboard-pages' => true
        ],
        'pages' => [
            'show_parents' => 'both'
        ],
        'session' => [
            'timeout' => 1800
        ],
        'warnings' => [
            'delete_page' => true
        ],
        'edit_mode' => 'normal',
        'frontend_pages_target' => '_blank',
        'show_github_msg' => true,
        'google_fonts' => true,
        'enable_auto_updates_check' => true,
        'notifications' => [
            'feed' => true,
            'dashboard' => true,
            'plugins' => true,
            'themes' => true
        ],
        'popularity' => [
            'enabled' => true,
            'ignore' => [
                0 => '/test*',
                1 => '/modular'
            ],
            'history' => [
                'daily' => 30,
                'monthly' => 12,
                'visitors' => 20
            ]
        ]
    ]
];