<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/angel281/public_html/faq/user/themes/clean-blog/blueprints/default.yaml',
    'modified' => 1501814024,
    'data' => [
        'title' => 'default',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.subheading' => [
                                    'type' => 'text',
                                    'label' => 'THEME_CLEAN_BLOG.ADMIN.SUBHEADING.LABEL',
                                    'help' => 'THEME_CLEAN_BLOG.ADMIN.SUBHEADING.HELP'
                                ],
                                'header.header_image' => [
                                    'type' => 'text',
                                    'label' => 'THEME_CLEAN_BLOG.ADMIN.HEADER_IMAGE.LABEL',
                                    'help' => 'THEME_CLEAN_BLOG.ADMIN.HEADER_IMAGE.HELP'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
