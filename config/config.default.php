<?php
//################################################ EDITAR O DIRETÓRIO ########
define('DIR', "/var/www/html/tutorial");
define('MODEL_DIR', DIR."/model");
define('VIEW_DIR', DIR."/view");
define('CONTROLLER_DIR', DIR."/controller");

ini_set('include_path', DIR.'/pear');

require_once DIR . '/pear/DB/DataObject.php';
require_once DIR . '/pear/Template/Sigma.php';

//Da um require na classe do DataObject
$options = &PEAR::getStaticProperty('DB_DataObject','options');
$config = parse_ini_file('db.ini',TRUE);
$options = $config['DB_DataObject'];