<?php
error_reporting(0);

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}

require 'jdf.php';
require 'madeline.php';


$settings = [
    'serialization' => [
        'cleanup_before_serialization' => true,
    ],
    'logger' => [
        'max_size' => 1*1024*1024,
    ],
    'peer' => [
        'full_fetch' => false,
        'cache_all_peers_on_startup' => false,
    ],
    'db'            => [
        'type'  => 'mysql',
        'mysql' => [
            'host'     => 'localhost',
            'port'     => '3306',
            'user'     => 'takpesar_WE', // یوزرنیم دیتابیس
            'password' => 'K;!;bAb$tI2d', // پسورد دیتابیس
            'database' => 'takpesar_WE', // دیتابیس
        ]
    ]
];

$MadelineProto = new \danog\MadelineProto\API('session.madeline',$settings);
$MadelineProto->start();
$date = date('Y/m/d');
$time = date('H:i:s');
$MadelineProto->account->updateProfile(['about' => "⏳ 𝚃𝙾𝙳𝙰𝚈 : $day_name / 𝐃𝐀𝐓𝐄 : $date / тιмє : $time / @tak_php"]);

echo json_encode(['@tak_php . . . @i_love_she . . . ']);
