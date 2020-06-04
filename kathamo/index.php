<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use Kathamo\Core\{Router, Request};

Router::load('routes.php')->direct(Request::uri(), Request::method());
