<?php

namespace ContainerGB3PoN4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Handler\CategoryHandler' shared autowired service.
     *
     * @return \App\Handler\CategoryHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'Handler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'CategoryHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Actions'.\DIRECTORY_SEPARATOR.'SoftDeleteService.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        $container->services['App\\Handler\\CategoryHandler'] = $instance = new \App\Handler\CategoryHandler($a, ($container->privates['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->privates['security.csrf.token_manager'] ?? $container->load('getSecurity_Csrf_TokenManagerService')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), new \App\Service\Actions\SoftDeleteService($a), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Handler\\CategoryHandler', $container));

        return $instance;
    }
}
