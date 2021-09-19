<?php

namespace Yu2ry\Clean\Domain\Repository;

use Yu2ry\Clean\Domain\Entity\User\User;
use Yu2ry\Clean\Domain\ValueObject\Email;
use Yu2ry\Clean\Domain\ValueObject\UserList;

/**
 * Interface UserRepository
 * @package Yu2ry\Clean\Domain\Repository
 */
interface UserRepository
{

    /**
     * @param int $id
     * @return User
     */
    public function find(int $id): User;

    /**
     * @param int $id
     * @return boolean
     */
    public function exists(int $id): bool;

    /**
     * @param Email $email
     * @return bool
     */
    public function existsByEmail(Email $email): bool;

    /**
     * @param User $user
     * @return User
     */
    public function save(User $user): User;

    /**
     * @param array<User> $users
     * @return UserList
     */
    public function saveMany(array $users): UserList;
}
