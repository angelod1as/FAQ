<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/angel281/public_html/faq/user/config/site.yaml',
    'modified' => 1501428903,
    'data' => [
        'title' => 'FAQ',
        'default_lang' => 'pt-br',
        'author' => [
            'name' => 'Angelo Dias',
            'email' => 'angelo@angelodias.com.br'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Perguntas frequentes sobre Angelo Dias'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
