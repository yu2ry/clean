<?php

namespace Yu2ry\Clean\Infa\Repository\DB\ORM;

use Yu2ry\Clean\Domain\Entity\User\User;
use Yu2ry\Clean\Domain\Repository\UserRepository;
use Yu2ry\Clean\Domain\ValueObject\Email;
use Yu2ry\Clean\Domain\ValueObject\UserList;

/**
 * Class EloquentUserRepository
 * @package Yu2ry\Clean\Infa\Repository\DB\ORM
 */
class EloquentUserRepository implements UserRepository
{

    /**
     * @param int $id
     * @return User
     */
    public function find(int $id): User
    {
        return User::find($id);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function exists(int $id): bool
    {
        return User::exists($id);
    }

    /**
     * @param User $user
     * @return User
     */
    public function save(User $user): User
    {
        $user->save();

        return $user->refresh();
    }

    /**
     * @param User[] $users
     * @return UserList
     */
    public function saveMany(array $users): UserList
    {
        foreach ($users as $user) {
            $user->save();
        }
        return new UserList($users);
    }

    /**
     * @param Email $email
     * @return bool
     */
    public function existsByEmail(Email $email): bool
    {
        return User::where(User::FIELD_EMAIL, $email)->exists();
    }
}
