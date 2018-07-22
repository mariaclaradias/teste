<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host='.getenv('host').';dbname='.getenv('dataBase'),
    'username' => 'getenv('username')',
    'password' => 'getenv('password')',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
