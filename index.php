<?php
// Logic based on Dynatrace Custom Service examples [1]
class InternalExample {
    public function say() {
        echo "Hello world!\n";
    }
}

class Example {
    public function __construct() {
        // Tracing the class creation [4]
    }

    public function run() {
        $internal = new InternalExample();
        $internal->say();
    }
}

// Execution loop: Ensure methods exit so data is reported [2]
while(true) {
    $exampleInstance = new Example();
    $exampleInstance->run();
    sleep(15); 
}
?>
