<?php

require_once dirname(__FILE__) . '/../config/configuration.php';
require_once $global['systemRootPath'] . 'plugin/YouPHPTubePlugin.php';

if (empty($_GET['file'])) {
    die('GET file not found');
}

$p = YouPHPTubePlugin::loadPluginIfEnabled("SecureVideosDirectory");



$path_parts = pathinfo($_GET['file']);
$file = $path_parts['basename'];
$path = "{$global['systemRootPath']}videos/{$file}";

if ($p) {
    $p->secure();
}

header("X-Sendfile: {$path}");
header("Content-type: " . mime_content_type($path));
header('Content-Length: ' . filesize($path));
die();
