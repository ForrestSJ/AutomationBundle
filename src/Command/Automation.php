<?php

namespace ForrestSJ\AutomationBundle\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'forrestsj:automation:start',
    description: 'Run Automation.'
)]
class Automation extends Command
{
//    protected static $defaultName = 'forrestsj:automation:start';

    protected function configure()
    {
        $this->setName('forrestsj:automation:start');
        $this->setDescription("Run Automation.");
    }

    public function __construct(string $name = null)
    {
        parent::__construct($name);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        echo "Test automation from bundle\n";
        return 0;
    }
}
