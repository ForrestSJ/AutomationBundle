<?php

namespace ForrestSJ\AutomationBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Class Automation
 *
 * @package ForrestSJ\AutomationBundle\Command
 */
class Automation extends Command
{
    protected static $defaultName = 'forrestsj:automate';

    protected function configure()
    {
        $this->setDescription('Automates scenario.');
    }

    public function __construct()
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        echo "starting automation";
        return Command::SUCCESS;
    }
}
