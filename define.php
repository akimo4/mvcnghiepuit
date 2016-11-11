<?php

define ("DS",DIRECTORY_SEPARATOR);
define ("ROOT_PATH", dirname(__FILE__));
define ("LIBRARY_PATH",ROOT_PATH.DS."libs".DS);
define ("APPLICATION_PATH",ROOT_PATH.DS."application".DS);
define ("PUBLIC_PATH",ROOT_PATH.DS."public");
define ("TEMPLATE_PATH",PUBLIC_PATH.DS."template".DS);

define ("ROOT_URL",DS."WebBanHang");
define ("PUBLIC_URL",ROOT_URL.DS."public".DS);
define ("TEMPLATE_URL", PUBLIC_URL."template".DS);
define ("APPLICATION_URL", ROOT_URL.DS."application".DS);

define ("DEFAULT_MODULE","default");
define ("DEFAULT_CONTROLLER","user");
define ("DEFAULT_ACTION","index");

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","banhang");

?>