<?php

// Look up other security checks in the docs!
\OCP\User::checkLoggedIn();
\OCP\App::checkAppEnabled('extcalsync');

$tpl = new OCP\Template("extcalsync", "main", "user");
$tpl->assign('msg', 'Hello World');
$tpl->printPage();