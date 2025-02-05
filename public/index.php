<?php

require_once "../config/config.php";
require_once BASE . "routes/router.php";
require_once BASE . "routes/web.php";

Router::dispatch();
