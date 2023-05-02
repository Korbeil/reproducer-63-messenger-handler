<?php

namespace App\Messenger;

class SimpleMessage
{
    public function __construct(
        public readonly string $message,
    ) {
    }
}
