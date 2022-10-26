<?php

namespace ForrestSJ\AutomationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use ForrestSJ\AutomationBundle\DependencyInjection\ForrestSJAutomationExtension;

class ForrestSJAutomationBundle extends Bundle
{

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $ext = new ForrestSJAutomationExtension([],$container);

    }
}
