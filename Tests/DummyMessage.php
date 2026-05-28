<?php

namespace Symfony\Component\Notifier\Tests\Transport;

use Symfony\Component\Notifier\Message\MessageInterface;
use Symfony\Component\Notifier\Message\MessageOptionsInterface;

class DummyMessage implements MessageInterface
{
    public function getRecipientId(): ?string { return null; }
    public function getSubject(): string { return ''; }
    public function getOptions(): ?MessageOptionsInterface { return null; }
    public function getTransport(): ?string { return null; }
}
