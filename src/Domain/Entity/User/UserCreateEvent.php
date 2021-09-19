<?php

namespace Yu2ry\Clean\Domain\Entity\User;

/**
 * Class UserCreateEvent
 * @package Yu2ry\Clean\Domain\Entity\User
 */
class UserCreateEvent
{

    /**
     * @var User
     */
    protected $user;

    /**
     * UserCreateEvent constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}