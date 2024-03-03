<?php

namespace ContainerVV55ggJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0qqmqkCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0qqmqkC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0qqmqkC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'consultationRepository' => ['privates', 'App\\Repository\\ConsultationRepository', 'getConsultationRepositoryService', true],
        ], [
            'consultationRepository' => 'App\\Repository\\ConsultationRepository',
        ]);
    }
}
