<?php
define("LOADING_DATA", true);
require_once("class.datafiller.inc.php");

echo "\r\n", "SET FOREIGN_KEY_CHECKS = FALSE;";
require_once("inc.data.php");
echo "\r\n", "\r\n", "SET FOREIGN_KEY_CHECKS = TRUE;";
echo "\r\n";
