<?php

namespace App\Messenger;

class BatchMessage
{
    public function __construct(
        /** @var SimpleMessage[] */
        public readonly array $messages,
    ) {
    }
}
