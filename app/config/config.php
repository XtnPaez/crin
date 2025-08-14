<?php
// Configuración de entorno
define('APP_ENV', 'local'); // local | desarrollo | produccion
define('APP_NAME', 'CRITERIOS DE INCLUSION');

// Rutas base
define('BASE_PATH', dirname(__DIR__)); // /app
define('BASE_URL', '/criterios'); // para links relativos

// Config BD
define('DB_HOST', 'localhost');
define('DB_PORT', '5432');
define('DB_NAME', 'crin');
define('DB_USER', 'postgres');
define('DB_PASS', 'Qatarairways');

// Configuración de idioma y zona horaria
date_default_timezone_set('America/Argentina/Buenos_Aires');
setlocale(LC_ALL, 'es_AR.UTF-8');