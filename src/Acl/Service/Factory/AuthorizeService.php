<?php

namespace RcmUser\Acl\Service\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * AuthorizeService
 *
 * AuthorizeService Factory
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   RcmUser\Acl\Service\Factory
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class AuthorizeService implements FactoryInterface
{
    /**
     * createService
     *
     * @param ServiceLocatorInterface $serviceLocator serviceLocator
     *
     * @return \RcmUser\Acl\Service\AuthorizeService
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $aclResourceService = $serviceLocator->get(
            \RcmUser\Acl\Service\AclResourceService::class
        );
        $aclDataService = $serviceLocator->get(
            \RcmUser\Acl\Service\AclDataService::class
        );

        $service
            = new \RcmUser\Acl\Service\AuthorizeService($aclResourceService, $aclDataService);

        return $service;
    }
}
