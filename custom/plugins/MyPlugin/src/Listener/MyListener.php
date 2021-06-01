<?php declare(strict_types=1);

namespace MyPlugin\Listener;

use MyPlugin\Event\MyEvent;
use Psr\Log\LoggerInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Event\EntityLoadedEvent;

class MyListener
{
    private LoggerInterface $logger;

    public function __construct(
        LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }

    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    public function onProductLoaded(EntityLoadedEvent $entityLoadedEvent)
    {
        $this->logger->notice('MyDispatcher: '. count($entityLoadedEvent->getEntities()));
    }
    public function onExampleEvent(MyEvent $example)
    {
        $this->logger->notice('MyDispatcher: '.var_export($example->getData(), true));
    }
}