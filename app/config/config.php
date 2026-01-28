<?php

/* ==============================
   CONFIGURACIÓN GENERAL
============================== */

date_default_timezone_set("America/Lima");
error_reporting(E_ALL);

/* ==============================
   RUTAS DEL SISTEMA
============================== */

/*define('BASE_URL', 'http://midominio.com/');*/
define('BASE_URL', 'http://localhost:8088/mikrosys/public');
define('APP_PATH', dirname(__DIR__));
define('PUBLIC_PATH', $_SERVER['DOCUMENT_ROOT']);

/* ==============================
   BASE DE DATOS
============================== */

define('DB_HOST', 'localhost');
define('DB_NAME', 'mikrosys');
define('DB_USER', 'root');
define('DB_PASS', '');

/* ==============================
   MIKROTIK API
============================== */

define('MIKROTIK_HOST', '10.32.195.50');   // IP ZeroTier
define('MIKROTIK_USER', 'apiuser');
define('MIKROTIK_PASS', 'S1st3m4s');
define('MIKROTIK_PORT', 8728);

/* ==============================
   SESIONES
============================== */

define('SESSION_TIME', 3600); // 1 hora

/* ==============================
   SISTEMA
============================== */

define('SYSTEM_NAME', 'MikroSys');
define('VERSION', '1.0.0');
define('DATE_NOW', date('Y-m-d H:i:s'));
