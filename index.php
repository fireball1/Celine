<?php

//
// PHASE: BOOTSTRAP
//
define('CELINE_INSTALL_PATH', dirname(__FILE__));
define('CELINE_SITE_PATH', CELINE_INSTALL_PATH . '/site');

require(CELINE_INSTALL_PATH.'/src/CCeline/bootstrap.php');

$ce = CCeline::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$ce->FrontControllerRoute();
//
// PHASE: THEME ENGINE RENDER
//
$ce->ThemeEngineRender();

?>