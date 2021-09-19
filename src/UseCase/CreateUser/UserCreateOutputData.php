<?php

namespace Yu2ry\Clean\UseCase\CreateUser;

use Yu2ry\Clean\Domain\Entity\User\User;

/**
 * Class OutputData
 * @package Yu2ry\Clean\UseCase\CreateUser
 */
class UserCreateOutputData
{

    /**
     * @var User
     */
    protected $user;

    /**
     * OutputData constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
