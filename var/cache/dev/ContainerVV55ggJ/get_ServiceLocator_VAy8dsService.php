<?php

namespace ContainerVV55ggJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VAy8dsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._vAy8ds' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._vAy8ds'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ConsultationController::delete' => ['privates', '.service_locator.AXYi.zo', 'get_ServiceLocator_AXYi_ZoService', true],
            'App\\Controller\\ConsultationController::edit' => ['privates', '.service_locator.AXYi.zo', 'get_ServiceLocator_AXYi_ZoService', true],
            'App\\Controller\\ConsultationController::index' => ['privates', '.service_locator.0qqmqkC', 'get_ServiceLocator_0qqmqkCService', true],
            'App\\Controller\\ConsultationController::new' => ['privates', '.service_locator.2Y50sEs', 'get_ServiceLocator_2Y50sEsService', true],
            'App\\Controller\\ConsultationController::show' => ['privates', '.service_locator.eCOt6U5', 'get_ServiceLocator_ECOt6U5Service', true],
            'App\\Controller\\ConsultationController::telecons' => ['privates', '.service_locator.0qqmqkC', 'get_ServiceLocator_0qqmqkCService', true],
            'App\\Controller\\DossiermedicalController::delete' => ['privates', '.service_locator.o3zroED', 'get_ServiceLocator_O3zroEDService', true],
            'App\\Controller\\DossiermedicalController::edit' => ['privates', '.service_locator.o3zroED', 'get_ServiceLocator_O3zroEDService', true],
            'App\\Controller\\DossiermedicalController::index' => ['privates', '.service_locator.f7br8Si', 'get_ServiceLocator_F7br8SiService', true],
            'App\\Controller\\DossiermedicalController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\DossiermedicalController::show' => ['privates', '.service_locator.VtVWoj7', 'get_ServiceLocator_VtVWoj7Service', true],
            'App\\Controller\\DossiermedicalController::statistics' => ['privates', '.service_locator.f7br8Si', 'get_ServiceLocator_F7br8SiService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ConsultationController:delete' => ['privates', '.service_locator.AXYi.zo', 'get_ServiceLocator_AXYi_ZoService', true],
            'App\\Controller\\ConsultationController:edit' => ['privates', '.service_locator.AXYi.zo', 'get_ServiceLocator_AXYi_ZoService', true],
            'App\\Controller\\ConsultationController:index' => ['privates', '.service_locator.0qqmqkC', 'get_ServiceLocator_0qqmqkCService', true],
            'App\\Controller\\ConsultationController:new' => ['privates', '.service_locator.2Y50sEs', 'get_ServiceLocator_2Y50sEsService', true],
            'App\\Controller\\ConsultationController:show' => ['privates', '.service_locator.eCOt6U5', 'get_ServiceLocator_ECOt6U5Service', true],
            'App\\Controller\\ConsultationController:telecons' => ['privates', '.service_locator.0qqmqkC', 'get_ServiceLocator_0qqmqkCService', true],
            'App\\Controller\\DossiermedicalController:delete' => ['privates', '.service_locator.o3zroED', 'get_ServiceLocator_O3zroEDService', true],
            'App\\Controller\\DossiermedicalController:edit' => ['privates', '.service_locator.o3zroED', 'get_ServiceLocator_O3zroEDService', true],
            'App\\Controller\\DossiermedicalController:index' => ['privates', '.service_locator.f7br8Si', 'get_ServiceLocator_F7br8SiService', true],
            'App\\Controller\\DossiermedicalController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\DossiermedicalController:show' => ['privates', '.service_locator.VtVWoj7', 'get_ServiceLocator_VtVWoj7Service', true],
            'App\\Controller\\DossiermedicalController:statistics' => ['privates', '.service_locator.f7br8Si', 'get_ServiceLocator_F7br8SiService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ConsultationController::delete' => '?',
            'App\\Controller\\ConsultationController::edit' => '?',
            'App\\Controller\\ConsultationController::index' => '?',
            'App\\Controller\\ConsultationController::new' => '?',
            'App\\Controller\\ConsultationController::show' => '?',
            'App\\Controller\\ConsultationController::telecons' => '?',
            'App\\Controller\\DossiermedicalController::delete' => '?',
            'App\\Controller\\DossiermedicalController::edit' => '?',
            'App\\Controller\\DossiermedicalController::index' => '?',
            'App\\Controller\\DossiermedicalController::new' => '?',
            'App\\Controller\\DossiermedicalController::show' => '?',
            'App\\Controller\\DossiermedicalController::statistics' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ConsultationController:delete' => '?',
            'App\\Controller\\ConsultationController:edit' => '?',
            'App\\Controller\\ConsultationController:index' => '?',
            'App\\Controller\\ConsultationController:new' => '?',
            'App\\Controller\\ConsultationController:show' => '?',
            'App\\Controller\\ConsultationController:telecons' => '?',
            'App\\Controller\\DossiermedicalController:delete' => '?',
            'App\\Controller\\DossiermedicalController:edit' => '?',
            'App\\Controller\\DossiermedicalController:index' => '?',
            'App\\Controller\\DossiermedicalController:new' => '?',
            'App\\Controller\\DossiermedicalController:show' => '?',
            'App\\Controller\\DossiermedicalController:statistics' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
