<?php
    /** O nome do banco de dados */
    define('DB_NAME', 'wda_crud');

    /** Usuário do banco de dados MySQL */
    define('DB_USER', 'root');

    /** Senha do banco de dados MySQL */
    define('DB_PASSWORD', '');

    /** Nome do host do MySQL */
    define('DB_HOST', 'localhost');

    /** Caminho absoluto para a pasta do sistema */
    if(!defined('ABSPATH'))
        define('ABSPATH', dirname(__FILE__) . '/');

    /** Caminho no server para o sistema */
    if(!defined('BASEURL'))
        define('BASEURL', '/crud-bootstrap-php/');

    /** Caminho do arquivo de banco de dados */
    if(!defined('DBAPI'))
        define('DBAPI', ABSPATH . 'inc/database.php');

    /** Caminho dos templates de header e footer */
    define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
    define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
?>