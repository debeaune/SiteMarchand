<?php

namespace ContainerMpX7iTK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FLGtRKRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FLGtRKR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FLGtRKR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['privates', '.errored..lqQ26W', NULL, 'Cannot determine controller argument for "App\\Controller\\ResetPasswordController::update()": the $encoder argument is type-hinted with the non-existent class or interface: "App\\Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface".'],
        ], [
            'encoder' => '?',
        ]);
    }
}
