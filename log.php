<?php

use Alura\DesignPattern\Log\StdoutLogManager;

require_once 'vendor/autoload.php';

$logManager = new StdoutLogManager();
$logManager->log('info', 'Olá mundo!');

