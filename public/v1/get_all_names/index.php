<?php

require_once __DIR__ . "/../../../api_core/config.php";
require_once __DIR__ . "/../../../api_core/response.php";

$data = require_once __DIR__  .  "/../../../api_core/data.php";

$names = [];
foreach ($data as $item) {
    $names[] = $item['nome'];
}
echo Response::json(200, 'Api is running!', $names);