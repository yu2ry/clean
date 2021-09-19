<?php

namespace Yu2ry\Clean\Domain\ValueObject;

use Yu2ry\Clean\Domain\Entity\User\User;

/**
 * Class UserList
 * @package Yu2ry\Clean\Domain\DTO
 */
class UserList extends AbstractObject
{

    /**
     * @var array<User> $users
     */
    private $users;

    /**
     * UserList constructor.
     * @param User[] $users
     */
    public function __construct(array $users)
    {
        $this->users = $users;
    }

    /**
     * @return User[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @return void
     * @throws \Exception
     */
    protected function validate(): void
    {
        foreach ($this->users as $user) {
            if (!($user instanceof User)) {
                throw new \Exception();
            }
        }
    }
}
