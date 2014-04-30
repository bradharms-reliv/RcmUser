<?php
/**
 * DoctrineAclRoleTest.php
 *
 * TEST
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   RcmUser\Test\Acl\Entity
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   GIT: <git_id>
 * @link      https://github.com/reliv
 */

namespace RcmUser\Test\Acl\Entity;

use RcmUser\Acl\Entity\DoctrineAclRole;
use RcmUser\Zf2TestCase;

require_once __DIR__ . '/../../../Zf2TestCase.php';

/**
 * Class DoctrineAclRoleTest
 *
 * TEST
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   RcmUser\Test\Acl\Entity
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright ${YEAR} Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class DoctrineAclRoleTest extends Zf2TestCase
{
    /**
     * testSetGet
     *
     * @covers \RcmUser\Acl\Entity\DoctrineAclRole
     *
     * @return void
     */
    public function testSetGet()
    {
        $aclRole = new DoctrineAclRole();

        $id = 123;
        $parentId = 321;

        $aclRole->setId($id);
        $aclRole->setParentId($parentId);

        $this->assertTrue(
            $aclRole->getParentId() === $parentId,
            'Setter or getter failed.'
        );
        $this->assertTrue(
            $aclRole->getId() === $id,
            'Setter or getter failed.'
        );
    }
}
 