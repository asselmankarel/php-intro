<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';

require Router::load('routes.php')->direct(Request::method(), Request::uri());
