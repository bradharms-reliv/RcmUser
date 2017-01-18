<?php

namespace RcmUser\User\Service\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class DoctrineUserRoleDataMapper
 *
 * DoctrineUserRoleDataMapper
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   RcmUser\User\Service\Factory
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class DoctrineUserRoleDataMapper implements FactoryInterface
{
    /**
     * createService
     *
     * @param ServiceLocatorInterface $serviceLocator serviceLocator
     *
     * @return DoctrineUserRoleDataMapper
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $cfg = $serviceLocator->get('RcmUser\Acl\Config');

        $em = $serviceLocator->get(
            \Doctrine\ORM\EntityManager::class
        );
        $acldm = $serviceLocator->get(
            \RcmUser\Acl\Db\AclRoleDataMapper::class
        );
        $service = new \RcmUser\User\Db\DoctrineUserRoleDataMapper($acldm);
        $service->setEntityManager($em);
        $service->setEntityClass(
            \RcmUser\User\Entity\DoctrineUserRole::class
        );

        return $service;
    }
}
