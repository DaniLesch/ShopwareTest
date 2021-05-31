<?php declare(strict_types=1);

namespace MyPlugin\Event;

use Symfony\Contracts\EventDispatcher\Event;

class MyEvent extends Event
{
    /**
     * @var array
     */
    private array $data;

    /**
     * @Event (\MyPlugin\Event\MyEvent)
     */
    public const EXAMPLE_EVENT = 'example.event';

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }
}