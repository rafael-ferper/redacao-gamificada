<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'u544891346_uBvf6';
$CFG->dbuser    = 'u544891346_056gA';
$CFG->dbpass    = 'WBDWmBn8gn';
$CFG->prefix    = 'p3st_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '0',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://redacaocomgamificacao.com.br';
$CFG->dataroot  = '/home/u544891346/domains/redacaocomgamificacao.com.br/public_html/.ht3slqsifieloz.data/';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
