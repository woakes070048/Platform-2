<?php

namespace Ds\Bundle\BpmBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Ds\Bundle\BpmBundle\DependencyInjection\Compiler\Bpm\ApiPass;

/**
 * Class DsBpmBundle
 */
class DsBpmBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ApiPass);
    }
}
