<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};

$route = Router::load('app/routes.php')
	->direct(Request::uri(), Request::method());