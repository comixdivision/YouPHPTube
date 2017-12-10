<?php
if (empty($global['systemRootPath'])) {
    $global['systemRootPath'] = '../';
}
require_once $global['systemRootPath'].'config/configuration.php';
require_once $global['systemRootPath'] . 'objects/user.php';
User::logoff();
header("location: {$global['webSiteRootURL']}");
