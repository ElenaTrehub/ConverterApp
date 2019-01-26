<?php

require_once  '../vendor/autoload.php';
require_once 'config.php';

use Application\Controllers\ApplicationController;


$app = new ApplicationController();
$app->Start();