<?php

declare(strict_types=1);

namespace Potter\Socket\Server;

interface SocketServerInterface
{
    public function listen(): void;
}