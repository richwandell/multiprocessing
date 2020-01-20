<?php

namespace wandell\Multiprocessing\Queues;

use SplQueue;

/**
 * @package wandell\Multiprocessing;
 */
class WorkQueue extends SplQueue
{
    /**
     * WorkQueue constructor.
     * @param array $jobData
     */
    public function __construct($jobData = array())
    {
        foreach ($jobData as $item) {
            $this->enqueue($item);
        }
    }
}