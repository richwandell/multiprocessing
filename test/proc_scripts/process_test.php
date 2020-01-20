<?php

use wandell\Multiprocessing\Task\Task;

include realpath(__DIR__ . "/../../vendor/") . "/autoload.php";

(new class extends Task {
    public function consume($data)
    {
        $this->write($data);
    }
})->listen();


