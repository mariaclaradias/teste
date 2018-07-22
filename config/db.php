<?php
/*
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

// Staging and Production
$db['default'] = array(
    'hostname'      =>  $url["host"],
    'username'      =>  $url["user"],
    'password'      =>  $url["pass"],
    'database'      =>  substr($url["path"], 1),
    'dbdriver'      =>  'mysqli',
    'activer'      =>  true,
    'pconnect'      =>  false,
    'dbdebug'      =>  false,
    'cacheon'      =>  false,
    'charset'      =>  'utf8',
    'dbcollat'      =>  'utf8unicodeci',
);*/

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=192.185.213.226;dbname=bertoldi_maria_clara',
    'username' => 'bertoldi_maria_c',
    'password' => 'maria@clara',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
