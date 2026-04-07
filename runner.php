<?php

require_once __DIR__ . '/index.php';

echo "[runner] Starting PHP built-in server for Dynatrace demo\n";

/**
 * Avviamo il web server PHP interno.
 * Questo crea:
 * - request lifecycle
 * - entry point PHP
 * - process runtime valido
 * => Dynatrace materializza la Process Group Instance
 */
$cmd = "php -S 0.0.0.0:8080 -t /app";
echo "[runner] Executing: $cmd\n";

passthru($cmd);
