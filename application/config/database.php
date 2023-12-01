<?php
defined('BASEPATH') or exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
<<<<<<< HEAD
    'dsn'       => '',
    'hostname'  => 'luisa.mysql.database.azure.com',
    'username'  => 'Luisa',
    'password'  => 'Arrozconleche123',
    'database'  => 'veico_tools',
    'dbdriver'  => 'sqlsrv',
    'dbprefix'  => '',
    'pconnect'  => FALSE,
=======
    'dsn'	    => '',
    
	'hostname'  => 'luisa.mysql.database.azure.com',	// El nombre de host o dirección IP del servidor de la base de datos.
	'username'  => 'Luisa',      // El nombre de usuario para la conexión a la base de datos.
	'password'  => 'Arrozconleche123',          // La contraseña para la conexión a la base de datos.
	'database'  => 'veico_tools', // El nombre de la base de datos predeterminada.
	
    'dbdriver'  => 'mysqli',
    'dbprefix'  => '',     
    'pconnect'  => FALSE,   
>>>>>>> c13b23974355d2676dca1c56d0eb841aa3736220
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