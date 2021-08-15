<?php

/**
 * @copyright EveryWorkflow. All rights reserved.
 */

declare(strict_types=1);

namespace EveryWorkflow\EcommerceBundle;

use EveryWorkflow\EcommerceBundle\DependencyInjection\EcommerceExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class EveryWorkflowEcommerceBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new EcommerceExtension();
    }
}
