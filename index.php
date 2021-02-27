<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\core\Router;
use App\core\Request;

require Router::load('app/routes.php')->direct(Request::method(), Request::uri());
