<?php
return [
    [
        "route" => "admin/database/index",
        "method" => "GET",
        "type" => 1,
        "is_menu" => 1,
        "title" => "数据库管理",
        "icon" => "icon-bangzhushouce",
        "tip" => "",
        "listorder" => 100,
        "child" => [
            [
                "route" => "admin/database/index",
                "method" => "GET",
                "type" => 1,
                "is_menu" => 1,
                "title" => "数据库备份",
                "icon" => "icon-bangzhushouce",
                "listorder" => 5,
                "child" => [
                    [
                        "route" => "admin/database/repair",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "修复表",
                    ],
                    [
                        "route" => "admin/database/optimize",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "优化表",
                    ],
                    [
                        "route" => "admin/database/import",
                        "method" => "GET",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "还原表",
                    ],
                    [
                        "route" => "admin/database/export",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "备份数据库",
                        "child" => [
                            [
                                "route" => "admin/database/export",
                                "method" => "GET",
                                "type" => 1,
                                "is_menu" => 0,
                                "title" => "备份数据库",
                            ]
                        ],
                    ],
                ],
            ],
            [
                "route" => "admin/database/restore",
                "method" => "GET",
                "type" => 1,
                "is_menu" => 1,
                "title" => "数据库还原",
                "icon" => "icon-undo",
                "listorder" => 10,
                "child" => [
                    [
                        "route" => "admin/database/restore",
                        "method" => "GET",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "数据库还原",
                        "child" => [
                            [
                                "route" => "admin/database/restore",
                                "method" => "POST",
                                "type" => 1,
                                "is_menu" => 0,
                                "title" => "备份数据库",
                            ]
                        ],
                    ],
                    [
                        "route" => "admin/database/del",
                        "method" => "POST",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "删除备份",
                    ],
                    [
                        "route" => "admin/database/download",
                        "method" => "GET",
                        "type" => 1,
                        "is_menu" => 0,
                        "title" => "备份数据库下载",
                    ],
                ],
            ],
        ],
    ],
];
