<?php declare(strict_types=1);

namespace MyPlugin\Console\Command;

use MyPlugin\Event\MyEvent;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class ExampleComm extends Command
{

    private EventDispatcherInterface $eventDispatcher;

    public function __construct(
        EventDispatcherInterface $eventDispatcher,
        string $name = null
    )
    {
        parent::__construct($name);
        $this->eventDispatcher = $eventDispatcher;
    }

    protected function configure()
    {
        $this->setName('example:dispatcher')->setDescription('my command description');
    }
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $event = new MyEvent(['foobar'=>'Hello!']);
        $this->eventDispatcher->dispatch($event, MyEvent::EXAMPLE_EVENT);
        $output->writeln("Hello World");
        return 0;
    }
}