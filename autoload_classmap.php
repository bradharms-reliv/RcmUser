<?php
// Generated by ZF2's ./bin/classmap_generator.php
return array(
  'RcmUser\Module'                                                            => __DIR__ . '/Module.php',
  'RcmUser\Acl\Db\AclRoleDataMapperInterface'                                 => __DIR__ . '/src/RcmUser/Acl/Db/AclRoleDataMapperInterface.php',
  'RcmUser\Acl\Db\AclRuleDataMapperInterface'                                 => __DIR__ . '/src/RcmUser/Acl/Db/AclRuleDataMapperInterface.php',
  'RcmUser\Acl\Db\DoctrineAclRoleDataMapper'                                  => __DIR__ . '/src/RcmUser/Acl/Db/DoctrineAclRoleDataMapper.php',
  'RcmUser\Acl\Db\DoctrineAclRuleDataMapper'                                  => __DIR__ . '/src/RcmUser/Acl/Db/DoctrineAclRuleDataMapper.php',
  'RcmUser\Acl\Entity\AclRole'                                                => __DIR__ . '/src/RcmUser/Acl/Entity/AclRole.php',
  'RcmUser\Acl\Entity\AclRule'                                                => __DIR__ . '/src/RcmUser/Acl/Entity/AclRule.php',
  'RcmUser\Acl\Entity\BjyAclRole'                                             => __DIR__ . '/src/RcmUser/Acl/Entity/BjyAclRole.php',
  'RcmUser\Acl\Entity\DoctrineAclRole'                                        => __DIR__ . '/src/RcmUser/Acl/Entity/DoctrineAclRole.php',
  'RcmUser\Acl\Entity\DoctrineAclRule'                                        => __DIR__ . '/src/RcmUser/Acl/Entity/DoctrineAclRule.php',
  'RcmUser\Acl\Event\UserDataServiceListeners'                                => __DIR__ . '/src/RcmUser/Acl/Event/UserDataServiceListeners.php',
  'RcmUser\Acl\Exception\RcmUserAclException'                                 => __DIR__ . '/src/RcmUser/Acl/Exception/RcmUserAclException.php',
  'RcmUser\Acl\Provider\BjyIdentityProvider'                                  => __DIR__ . '/src/RcmUser/Acl/Provider/BjyIdentityProvider.php',
  'RcmUser\Acl\Provider\BjyResourceProvider'                                  => __DIR__ . '/src/RcmUser/Acl/Provider/BjyResourceProvider.php',
  'RcmUser\Acl\Provider\BjyRoleProvider'                                      => __DIR__ . '/src/RcmUser/Acl/Provider/BjyRoleProvider.php',
  'RcmUser\Acl\Provider\BjyRuleProvider'                                      => __DIR__ . '/src/RcmUser/Acl/Provider/BjyRuleProvider.php',
  'RcmUser\Acl\Provider\ResourceProviderInterface'                            => __DIR__ . '/src/RcmUser/Acl/Provider/ResourceProviderInterface.php',
  'RcmUser\Acl\Service\AclDataService'                                        => __DIR__ . '/src/RcmUser/Acl/Service/AclDataService.php',
  'RcmUser\Acl\Service\AclResourceService'                                    => __DIR__ . '/src/RcmUser/Acl/Service/AclResourceService.php',
  'RcmUser\Acl\Service\Factory\AclResourceService'                            => __DIR__ . '/src/RcmUser/Acl/Service/Factory/AclResourceService.php',
  'RcmUser\Acl\Service\Factory\BjyIdentityProvider'                           => __DIR__ . '/src/RcmUser/Acl/Service/Factory/BjyIdentityProvider.php',
  'RcmUser\Acl\Service\Factory\BjyResourceProvider'                           => __DIR__ . '/src/RcmUser/Acl/Service/Factory/BjyResourceProvider.php',
  'RcmUser\Acl\Service\Factory\BjyRoleProvider'                               => __DIR__ . '/src/RcmUser/Acl/Service/Factory/BjyRoleProvider.php',
  'RcmUser\Acl\Service\Factory\BjyRuleProvider'                               => __DIR__ . '/src/RcmUser/Acl/Service/Factory/BjyRuleProvider.php',
  'RcmUser\Acl\Service\Factory\Config'                                        => __DIR__ . '/src/RcmUser/Acl/Service/Factory/Config.php',
  'RcmUser\Acl\Service\Factory\DoctrineAclRoleDataMapper'                     => __DIR__ . '/src/RcmUser/Acl/Service/Factory/DoctrineAclRoleDataMapper.php',
  'RcmUser\Acl\Service\Factory\DoctrineAclRuleDataMapper'                     => __DIR__ . '/src/RcmUser/Acl/Service/Factory/DoctrineAclRuleDataMapper.php',
  'RcmUser\Acl\Service\Factory\UserAuthorizeService'                          => __DIR__ . '/src/RcmUser/Acl/Service/Factory/UserAuthorizeService.php',
  'RcmUser\Acl\Service\Factory\UserDataServiceListeners'                      => __DIR__ . '/src/RcmUser/Acl/Service/Factory/UserDataServiceListeners.php',
  'RcmUser\Acl\Service\UserAuthorizeService'                                  => __DIR__ . '/src/RcmUser/Acl/Service/UserAuthorizeService.php',
  'RcmUser\Authentication\Adapter\UserAdapter'                                => __DIR__ . '/src/RcmUser/Authentication/Adapter/UserAdapter.php',
  'RcmUser\Authentication\Event\AbstractAuthServiceListeners'                 => __DIR__ . '/src/RcmUser/Authentication/Event/AbstractAuthServiceListeners.php',
  'RcmUser\Authentication\Event\UserAuthenticationServiceListeners'           => __DIR__ . '/src/RcmUser/Authentication/Event/UserAuthenticationServiceListeners.php',
  'RcmUser\Authentication\Service\AuthenticationService'                      => __DIR__ . '/src/RcmUser/Authentication/Service/AuthenticationService.php',
  'RcmUser\Authentication\Service\Factory\Adapter'                            => __DIR__ . '/src/RcmUser/Authentication/Service/Factory/Adapter.php',
  'RcmUser\Authentication\Service\Factory\AuthenticationService'              => __DIR__ . '/src/RcmUser/Authentication/Service/Factory/AuthenticationService.php',
  'RcmUser\Authentication\Service\Factory\Config'                             => __DIR__ . '/src/RcmUser/Authentication/Service/Factory/Config.php',
  'RcmUser\Authentication\Service\Factory\Storage'                            => __DIR__ . '/src/RcmUser/Authentication/Service/Factory/Storage.php',
  'RcmUser\Authentication\Service\Factory\UserAuthenticationService'          => __DIR__ . '/src/RcmUser/Authentication/Service/Factory/UserAuthenticationService.php',
  'RcmUser\Authentication\Service\Factory\UserAuthenticationServiceListeners' => __DIR__ . '/src/RcmUser/Authentication/Service/Factory/UserAuthenticationServiceListeners.php',
  'RcmUser\Authentication\Service\UserAuthenticationService'                  => __DIR__ . '/src/RcmUser/Authentication/Service/UserAuthenticationService.php',
  'RcmUser\Authentication\Storage\UserSession'                                => __DIR__ . '/src/RcmUser/Authentication/Storage/UserSession.php',
  'RcmUser\Config\Config'                                                     => __DIR__ . '/src/RcmUser/Config/Config.php',
  'RcmUser\Controller\Plugin\RcmUserIsAllowed'                                => __DIR__ . '/src/RcmUser/Controller/Plugin/RcmUserIsAllowed.php',
  'RcmUser\Controller\UserController'                                         => __DIR__ . '/src/RcmUser/Controller/UserController.php',
  'RcmUser\Db\DoctrineMapper'                                                 => __DIR__ . '/src/RcmUser/Db/DoctrineMapper.php',
  'RcmUser\Event\EventProvider'                                               => __DIR__ . '/src/RcmUser/Event/EventProvider.php',
  'RcmUser\Exception\RcmUserException'                                        => __DIR__ . '/src/RcmUser/Exception/RcmUserException.php',
  'RcmUser\Exception\RcmUserReadOnlyException'                                => __DIR__ . '/src/RcmUser/Exception/RcmUserReadOnlyException.php',
  'RcmUser\Provider\RcmUserAclResourceProvider'                               => __DIR__ . '/src/RcmUser/Provider/RcmUserAclResourceProvider.php',
  'RcmUser\Result'                                                            => __DIR__ . '/src/RcmUser/Result.php',
  'RcmUser\Service\Exception\InvalidInputException'                           => __DIR__ . '/src/RcmUser/Service/Exception/InvalidInputException.php',
  'RcmUser\Service\Factory\Config'                                            => __DIR__ . '/src/RcmUser/Service/Factory/Config.php',
  'RcmUser\Service\Factory\ControllerPluginRcmUserIsAllowed'                  => __DIR__ . '/src/RcmUser/Service/Factory/ControllerPluginRcmUserIsAllowed.php',
  'RcmUser\Service\Factory\EventListeners'                                    => __DIR__ . '/src/RcmUser/Service/Factory/EventListeners.php',
  'RcmUser\Service\Factory\RcmUserAclResourceProvider'                        => __DIR__ . '/src/RcmUser/Service/Factory/RcmUserAclResourceProvider.php',
  'RcmUser\Service\Factory\RcmUserService'                                    => __DIR__ . '/src/RcmUser/Service/Factory/RcmUserService.php',
  'RcmUser\Service\Factory\ViewHelperRcmUserIsAllowed'                        => __DIR__ . '/src/RcmUser/Service/Factory/ViewHelperRcmUserIsAllowed.php',
  'RcmUser\Service\RcmUserService'                                            => __DIR__ . '/src/RcmUser/Service/RcmUserService.php',
  'RcmUser\User\Data\AbstractUserDataPreparer'                                => __DIR__ . '/src/RcmUser/User/Data/AbstractUserDataPreparer.php',
  'RcmUser\User\Data\DbUserDataPreparer'                                      => __DIR__ . '/src/RcmUser/User/Data/DbUserDataPreparer.php',
  'RcmUser\User\Data\UserDataPreparer'                                        => __DIR__ . '/src/RcmUser/User/Data/UserDataPreparer.php',
  'RcmUser\User\Data\UserDataPreparerInterface'                               => __DIR__ . '/src/RcmUser/User/Data/UserDataPreparerInterface.php',
  'RcmUser\User\Data\UserValidator'                                           => __DIR__ . '/src/RcmUser/User/Data/UserValidator.php',
  'RcmUser\User\Data\UserValidatorInterface'                                  => __DIR__ . '/src/RcmUser/User/Data/UserValidatorInterface.php',
  'RcmUser\User\Db\AbstractUserDataMapper'                                    => __DIR__ . '/src/RcmUser/User/Db/AbstractUserDataMapper.php',
  'RcmUser\User\Db\DoctrineUserDataMapper'                                    => __DIR__ . '/src/RcmUser/User/Db/DoctrineUserDataMapper.php',
  'RcmUser\User\Db\DoctrineUserRoleDataMapper'                                => __DIR__ . '/src/RcmUser/User/Db/DoctrineUserRoleDataMapper.php',
  'RcmUser\User\Db\UserDataMapperInterface'                                   => __DIR__ . '/src/RcmUser/User/Db/UserDataMapperInterface.php',
  'RcmUser\User\Db\UserRolesDataMapperInterface'                              => __DIR__ . '/src/RcmUser/User/Db/UserRolesDataMapperInterface.php',
  'RcmUser\User\Entity\DoctrineUser'                                          => __DIR__ . '/src/RcmUser/User/Entity/DoctrineUser.php',
  'RcmUser\User\Entity\DoctrineUserRole'                                      => __DIR__ . '/src/RcmUser/User/Entity/DoctrineUserRole.php',
  'RcmUser\User\Entity\ReadOnlyUser'                                          => __DIR__ . '/src/RcmUser/User/Entity/ReadOnlyUser.php',
  'RcmUser\User\Entity\User'                                                  => __DIR__ . '/src/RcmUser/User/Entity/User.php',
  'RcmUser\User\Entity\UserInterface'                                         => __DIR__ . '/src/RcmUser/User/Entity/UserInterface.php',
  'RcmUser\User\Entity\UserRole'                                              => __DIR__ . '/src/RcmUser/User/Entity/UserRole.php',
  'RcmUser\User\Entity\UserRoleInterface'                                     => __DIR__ . '/src/RcmUser/User/Entity/UserRoleInterface.php',
  'RcmUser\User\Event\AbstractUserDataServiceListeners'                       => __DIR__ . '/src/RcmUser/User/Event/AbstractUserDataServiceListeners.php',
  'RcmUser\User\Event\UserDataServiceListeners'                               => __DIR__ . '/src/RcmUser/User/Event/UserDataServiceListeners.php',
  'RcmUser\User\InputFilter\UserInputFilter'                                  => __DIR__ . '/src/RcmUser/User/InputFilter/UserInputFilter.php',
  'RcmUser\User\Result'                                                       => __DIR__ . '/src/RcmUser/User/Result.php',
  'RcmUser\User\Service\Factory\Config'                                       => __DIR__ . '/src/RcmUser/User/Service/Factory/Config.php',
  'RcmUser\User\Service\Factory\DbUserDataPreparer'                           => __DIR__ . '/src/RcmUser/User/Service/Factory/DbUserDataPreparer.php',
  'RcmUser\User\Service\Factory\DoctrineUserDataMapper'                       => __DIR__ . '/src/RcmUser/User/Service/Factory/DoctrineUserDataMapper.php',
  'RcmUser\User\Service\Factory\DoctrineUserRoleDataMapper'                   => __DIR__ . '/src/RcmUser/User/Service/Factory/DoctrineUserRoleDataMapper.php',
  'RcmUser\User\Service\Factory\Encryptor'                                    => __DIR__ . '/src/RcmUser/User/Service/Factory/Encryptor.php',
  'RcmUser\User\Service\Factory\UserDataPreparer'                             => __DIR__ . '/src/RcmUser/User/Service/Factory/UserDataPreparer.php',
  'RcmUser\User\Service\Factory\UserDataService'                              => __DIR__ . '/src/RcmUser/User/Service/Factory/UserDataService.php',
  'RcmUser\User\Service\Factory\UserDataServiceListeners'                     => __DIR__ . '/src/RcmUser/User/Service/Factory/UserDataServiceListeners.php',
  'RcmUser\User\Service\Factory\UserPropertyService'                          => __DIR__ . '/src/RcmUser/User/Service/Factory/UserPropertyService.php',
  'RcmUser\User\Service\Factory\UserValidator'                                => __DIR__ . '/src/RcmUser/User/Service/Factory/UserValidator.php',
  'RcmUser\User\Service\UserDataService'                                      => __DIR__ . '/src/RcmUser/User/Service/UserDataService.php',
  'RcmUser\User\Service\UserPropertyService'                                  => __DIR__ . '/src/RcmUser/User/Service/UserPropertyService.php',
  'RcmUser\View\Helper\RcmUserIsAllowed'                                      => __DIR__ . '/src/RcmUser/View/Helper/RcmUserIsAllowed.php',
  'RcmUser\Bootstrap'                                                         => __DIR__ . '/test/Bootstrap.php',
  'RcmUser\ImplementationTest\Tester'                                         => __DIR__ . '/test/ImplementationTest/Tester.php',
  'RcmUser\Test\Acl\Entity\AclRoleTest'                                       => __DIR__ . '/test/RcmUser/Acl/Entity/AclRoleTest.php',
  'RcmUser\Test\Acl\Entity\AclRuleTest'                                       => __DIR__ . '/test/RcmUser/Acl/Entity/AclRuleTest.php',
  'RcmUser\Test\Acl\Entity\BjyAclRoleTest'                                    => __DIR__ . '/test/RcmUser/Acl/Entity/BjyAclRoleTest.php',
  'RcmUser\Test\Acl\Entity\DoctrineAclRoleTest'                               => __DIR__ . '/test/RcmUser/Acl/Entity/DoctrineAclRoleTest.php',
  'RcmUser\Test\Acl\Entity\DoctrineAclRuleTest'                               => __DIR__ . '/test/RcmUser/Acl/Entity/DoctrineAclRuleTest.php',
  'RcmUser\Test\Acl\Service\UserAuthorizeServiceTest'                         => __DIR__ . '/test/RcmUser/Acl/Service/UserAuthorizeServiceTest.php',
  'RcmUser\Test\Authentication\Service\UserAuthenticationServiceTest'         => __DIR__ . '/test/RcmUser/Authentication/Service/UserAuthenticationServiceTest.php',
  'RcmUser\Test\Config\ConfigTest'                                            => __DIR__ . '/test/RcmUser/Config/ConfigTest.php',
  'RcmUser\Test\Event\EventProviderTest'                                      => __DIR__ . '/test/RcmUser/Event/EventProviderTest.php',
  'RcmUser\Test\ModuleTest'                                                   => __DIR__ . '/test/RcmUser/ModuleTest.php',
  'RcmUser\Test\Provider\RcmUserAclResourceProviderTest'                      => __DIR__ . '/test/RcmUser/Provider/RcmUserAclResourceProviderTest.php',
  'RcmUser\Test\ResultTest'                                                   => __DIR__ . '/test/RcmUser/ResultTest.php',
  'RcmUser\Test\Service\RcmUserServiceTest'                                   => __DIR__ . '/test/RcmUser/Service/RcmUserServiceTest.php',
  'RcmUser\Test\User\Entity\ReadOnlyUserTest'                                 => __DIR__ . '/test/RcmUser/User/Entity/ReadOnlyUserTest.php',
  'RcmUser\Test\User\Entity\UserRoleTest'                                     => __DIR__ . '/test/RcmUser/User/Entity/UserRoleTest.php',
  'RcmUser\Test\User\Entity\UserTest'                                         => __DIR__ . '/test/RcmUser/User/Entity/UserTest.php',
  'RcmUser\Test\User\ResultTest'                                              => __DIR__ . '/test/RcmUser/User/ResultTest.php',
  'RcmUser\Test\User\Service\UserDataServiceTest'                             => __DIR__ . '/test/RcmUser/User/Service/UserDataServiceTest.php',
  'RcmUser\Test\User\Service\UserPropertyServiceTest'                         => __DIR__ . '/test/RcmUser/User/Service/UserPropertyServiceTest.php',
  'RcmUser\Zf2TestCase'                                                       => __DIR__ . '/test/Zf2TestCase.php',
);
