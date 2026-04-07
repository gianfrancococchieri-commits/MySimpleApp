<?php

class Example {
    public function run() {
        return "Hello from Example::run()";
    }
}

$example = new Example();
echo $example->run();
