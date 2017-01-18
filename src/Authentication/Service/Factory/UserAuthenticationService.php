<?php

namespace RcmUser\Authentication\Service\Factory;

use Zend\EventManager\EventManagerInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * UserAuthenticationService
 *
 * UserAuthenticationService
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   RcmUser\Authentication\Service\Factory
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class UserAuthenticationService implements FactoryInterface
{

    /**
     * createService
     *
     * @param ServiceLocatorInterface $serviceLocator serviceLocator
     *
     * @return mixed|\RcmUser\Authentication\Service\UserAuthenticationService
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('RcmUser\Auth\Config');
        /** @var EventManagerInterface $eventManager */
        $eventManager = $serviceLocator->get(
            \RcmUser\Event\UserEventManager::class
        );

        $service = new \RcmUser\Authentication\Service\UserAuthenticationService(
                $eventManager
        );

        $service->setObfuscatePassword(
            $config->get(
                'ObfuscatePasswordOnAuth',
                false
            )
        );

        return $service;
    }
}
