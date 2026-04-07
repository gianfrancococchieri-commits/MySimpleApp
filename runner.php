<?php
require_once __DIR__ . '/index.php';

while (true) {
    $e = new Example();
    $e->run();

    // ✅ Attività osservabile (scegline UNA)
    file_get_contents("https://example.com");   // HTTP = tracciabile
    // usleep(50000);                            // alternativa soft
    // gc_collect_cycles();                      // alternativa interna

    sleep(15);
}
