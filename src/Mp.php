<?php /** @noinspection PhpComposerExtensionStubsInspection */

namespace wandell\Multiprocessing;

use wandell\Multiprocessing\Exceptions\SocketException;

abstract class Mp
{
    /**
     * @param $filename
     * @param $lineNumber
     * @throws SocketException
     */
    protected function throwSocketException($filename, $lineNumber)
    {
        $code = socket_last_error();
        $message = socket_strerror($code);
        throw new SocketException($message, $code, 1, $filename, $lineNumber);
    }
}