<?php
class InternalExample {
    public function say() {
        echo "Hello world!\n";
    }
}
class Example {
    public function __construct() {
        // constructor
    }

    public function run() {
        $internal = new InternalExample();
        $internal->say();
    }
}
// Single execution, then exit
$exampleInstance = new Example();
$exampleInstance->run();
