<?php
defined('BASEPATH') or exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'       => '',
    'hostname'  => 'luisa.mysql.database.azure.com',
    'username'  => 'Luisa',
    'password'  => 'Arrozconleche123',
    'database'  => 'veico_tools',
    'dbdriver'  => 'sqlsrv',
    'dbprefix'  => '',
    'pconnect'  => FALSE,
    'db_debug'  => (ENVIRONMENT !== 'production'),
    'cache_on'  => FALSE,
    'cachedir'  => '',
    'char_set'  => 'utf8',
    'dbcollat'  => 'utf8_general_ci',
    'swap_pre'  => '',
    'encrypt'   => array(
        'ssl_ca' => '../../DigiCertGlobalRootCA.crt.pem',  // Ruta al certificado de la raíz de la cadena de certificados de Azure
    ),
    'compress'  => FALSE,
    'stricton'  => FALSE,
    'failover'  => array(),
    'save_queries' => TRUE
);


// Carga el controlador sqlsrv si no se ha cargado previamente
$autoload['libraries'] = array('database', 'sqlsrv');z