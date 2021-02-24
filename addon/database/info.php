<?php

return [
    'module' => 'database',
    'name' => '数据库管理',
    'introduce' => '数据库备份、优化、修复及还原',
    'author' => 'deatil',
    'authorsite' => 'http://github.com/deatil',
    'authoremail' => 'deatil@github.com',
    'version' => '2.0.8',
    'adaptation' => '2.3.27',
    
    'path' => __DIR__,
    
    // 依赖模块
    'need_module' => [],
    
    // 设置
    'setting' => [
        'path' => [ 
            'title' => '数据库备份路径', 
            'type' => 'text', 
            'value' => '/data/', 
            'style' => "width:200px;", 
            'tips' => '路径必须以 / 结尾',
        ],
        'part' => [
            'title' => '数据库备份卷大小',
            'type' => 'text',
            'value' => '20971520',
            'style' => "width:200px;",
            'tips' => '该值用于限制压缩后的分卷最大长度。单位：B；建议设置20M',
        ],
        'compress' => [
            'title' => '是否启用压缩',
            'type' => 'select',
            'options' => [
                '1' => '启用压缩',
                '0' => '不启用',
            ],
            'value' => '1',
            'tips' => '压缩备份文件需要PHP环境支持gzopen,gzwrite函数',
        ],
        'level' => [
            'title' => '压缩级别',
            'type' => 'select',
            'options' => [
                '1' => '普通',
                '4' => '一般',
                '9' => '最高',
            ],
            'value' => '9',
            'tips' => '数据库备份文件的压缩级别，该配置在开启压缩时生效',
        ],
    ],
    
    'menus' => include __DIR__ . '/menu.php',
    
    'event' => [],
    
    'demo' => '',
];
