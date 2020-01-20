<?php

namespace wandell\Multiprocessing;

use wandell\Multiprocessing\Pool\Pool;
use wandell\Multiprocessing\Pool\SocketPool;
use wandell\Multiprocessing\Pool\StreamPool;
use wandell\Multiprocessing\Task\Task;
use InvalidArgumentException;

final class PoolFactory
{
    /**
     * @param array $options
     * @return Pool
     */
    public final static function create($options = array())
    {
        if (isset($options["type"])) {
            switch ($options["type"]) {
                case Task::TYPE_STREAM:
                    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                        throw new InvalidArgumentException("Windows stream support disabled, please use socket type");
                    }
                    return new StreamPool($options);
                    break;

                case Task::TYPE_SOCKET:
                    return new SocketPool($options);
                    break;
            }
        }

        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            return new SocketPool($options);
        }

        return new StreamPool($options);
    }
}