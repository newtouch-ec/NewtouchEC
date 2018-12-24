<?php

$db['member_veremail']=array (
    'columns' =>
        array (
            'id' =>
                array (
                    'type' => 'int(10)',
                    'required' => true,
                    'pkey' => true,
                    'extra' => 'auto_increment',
                    'editable' => false,
                ),
            'member_id' =>
                array (
                    'type' => 'table:members',
                    'default' => 0,
                    'required' => true,
                    'editable' => false,
                ),
            'email' =>
                array (
                    'type' => 'varchar(100)',
                    'required' => true,
                    'editable' => false,
                ),
            'status' =>
                array (
                    'type' =>
                        array (
                            'n' => '未验证',
                            'y' => '已验证',
                        ),
                    'default' => 'n',
                    'required' => true,
                    'editable' => false,
                ),
            'token' =>
                array (
                    'type' => 'varchar(32)',
                    'required' => true,
                    'editable' => false,
                ),
        ),

    'index' =>
        array (
            'ind_token' =>
                array (
                    'columns' =>
                        array (
                            0 => 'token',
                        ),
                ),
            'ind_member_id' =>
                array (
                    'columns' =>
                        array (
                            0 => 'member_id',
                        ),
                ),
        ),
    'engine' => 'innodb',
    'version' => '$Rev: 42752 $',
);
