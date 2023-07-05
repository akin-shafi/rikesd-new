<?php

  ob_start(); // turn on output buffering

  //this is to set the default timezone to lagos
  date_default_timezone_set("Africa/Lagos");

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  //   define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("PUBLIC_PATH", PROJECT_PATH); //modified
  define("SHARED_PATH", PRIVATE_PATH . '/shared');

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:

if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '192.168.64.2') {
  define("WWW_ROOT", '/rikesd-new/app');
  define("WWW_PATH", '/rikesd-new');
}else{
  define("WWW_ROOT", '/app');
  define("WWW_PATH", '/');

}

  

  // define("WWW_ROOT", '');
  // * Can dynamically find everything in URL up to "/public"
  // $public_end = strpos($_SERVER['SCRIPT_NAME'], '/lawchamber') + 11;
  // $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  // define("WWW_ROOT", $doc_root);

  require_once('functions.php');
  require_once('status_error_functions.php');
  require_once('db_credentials.php');
  require_once('database_functions.php');
  require_once('validation_functions.php');

  // Load class definitions manually

  // -> Individually
  // require_once('classes/bicycle.class.php');

  // -> All classes in directory
  foreach (glob('classes/*.class.php') as $file) {
      require_once($file);
  }

  // Autoload class definitions
  function my_autoload($class)
  {
      if (preg_match('/\A\w+\Z/', $class)) {
          include('classes/' . $class . '.class.php');
      }
  }
  spl_autoload_register('my_autoload');

  $database = db_connect();
  DatabaseObject::set_database($database);


  $session = new Session;

  $loggedInAdmin = Admin::find_by_email($session->admin);
  $currency = '₦' ;

  // if (isset($loggedInAdmin->id)) {
  //        $support = AccessControl::find_by_admin_id($loggedInAdmin->id)->support ?? 0;
  // }
  
  
    
   