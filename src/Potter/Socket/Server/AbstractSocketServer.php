<?php

declare(strict_types=1);

namespace Potter\Socket\Server;

abstract class AbstractSocketServer implements SocketServerInterface
{
    abstract public function listen(int $backlog = 0): void;
}