<?php

namespace wandell\Multiprocessing\IPC;

final class WakeTime
{
    /**
     * @var int
     */
    private $time;

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }
}