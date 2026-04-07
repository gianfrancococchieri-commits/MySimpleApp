<?php

require_once __DIR__ . '/index.php';

while (true) {
    $e = new Example();
    $e->run();
    sleep(15);
}
