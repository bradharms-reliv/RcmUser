<?php
/**
 * UserController.php
 *
 * UserController
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   RcmUser\Controller
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   GIT: <git_id>
 * @link      https://github.com/reliv
 */

namespace RcmUser\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * UserController
 *
 * UserController
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   RcmUser\Controller
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class UserController extends AbstractActionController
{
    /**
     * indexAction
     *
     * @return array
     */
    public function indexAction()
    {
        $test = array(
            'userController' => $this,
            'rcmUserService' => $this->getServiceLocator()->get('RcmUser\Service\RcmUserService'),
            'bjyAuthService' => $this->getServiceLocator()->get('BjyAuthorize\Service\Authorize'),
        );

        return $test;
    }
}
