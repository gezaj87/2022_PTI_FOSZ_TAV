<?php

include_once 'core/Autoloader.php';
(new Dotenv(__DIR__ . '/.env'))->load();

$app = new App();