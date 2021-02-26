<?php
require 'helpers/common.php';
require 'models/Task.php';
require 'core/bootstrap.php';
require 'core/Router.php';
require 'core/Request.php';


require Router::load('routes.php')->direct(Request::uri());
