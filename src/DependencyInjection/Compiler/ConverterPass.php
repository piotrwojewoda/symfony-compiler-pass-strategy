<?php


namespace App\DependencyInjection\Compiler;


use App\Service\Conversion;
use App\Service\Converter\ConverterInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ConverterPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->has(Conversion::SERVICE_TAG)) {
            return false;
        }
        $definition = $container->findDefinition(Conversion::SERVICE_TAG);
        $taggedServices = $container->findTaggedServiceIds(ConverterInterface::SERVICE_TAG);

        foreach ($taggedServices as $id => $tag) {
            $reference = [new Reference($id)];
            $definition->addMethodCall('addConverter', $reference);
        }
    }
}
