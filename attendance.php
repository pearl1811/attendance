<?php

require_once 'vtlib/Vtiger/Module.php';
require_once 'vtlib/Vtiger/Package.php';

$Vtiger_Utils_Log = true;

$package = new Vtiger_Package();
$package->import('AttendanceV1.zip'); // Can be any-where on your server.
