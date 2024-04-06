<?php

namespace Container8eRFC3W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotFoundControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\NotFoundController' shared autowired service.
     *
     * @return \App\Controller\NotFoundController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/NotFoundController.php';

        $container->services['App\\Controller\\NotFoundController'] = $instance = new \App\Controller\NotFoundController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\NotFoundController', $container));

        return $instance;
    }
}
