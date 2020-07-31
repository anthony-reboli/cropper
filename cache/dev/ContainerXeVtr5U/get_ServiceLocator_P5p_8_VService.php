<?php

namespace ContainerXeVtr5U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P5p_8_VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P5p.8.v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P5p.8.v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'photo' => ['privates', '.errored..service_locator.P5p.8.v.App\\Entity\\Photos', NULL, 'Cannot autowire service ".service_locator.P5p.8.v": it references class "App\\Entity\\Photos" but no such service exists.'],
        ], [
            'photo' => 'App\\Entity\\Photos',
        ]);
    }
}