<?php

namespace RcmUser\Api\Acl;

use RcmUser\User\Entity\UserInterface;

/**
 * NOTE: This does NOT use rules, just determines if the user has a role in the linage
 *
 * @author James Jervis - https://github.com/jerv13
 */
interface HasRoleBasedAccessUser
{
    /**
     * @param UserInterface|null $user
     * @param string             $roleId
     *
     * @return bool
     */
    public function __invoke(
        $user,
        $roleId
    ):bool;
}
