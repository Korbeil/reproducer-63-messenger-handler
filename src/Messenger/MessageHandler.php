<?php

namespace App\Messenger;

use Symfony\Component\Messenger\Attribute\AsMessageHandler;

class MessageHandler
{
    #[AsMessageHandler]
    public function batch(BatchMessage $batchMessage): void
    {
        // batch
    }

    #[AsMessageHandler]
    public function simple(SimpleMessage $message): void
    {
        // simple
    }
}
