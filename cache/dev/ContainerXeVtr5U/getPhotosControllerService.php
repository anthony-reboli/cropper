<?php

namespace ContainerXeVtr5U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhotosControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PhotosController' shared autowired service.
     *
     * @return \App\Controller\PhotosController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\PhotosController.php';

        $container->services['App\\Controller\\PhotosController'] = $instance = new \App\Controller\PhotosController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\PhotosController', $container));

        return $instance;
    }
}
