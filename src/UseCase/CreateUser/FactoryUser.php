<?php

namespace Yu2ry\Clean\UseCase\CreateUser;

use Illuminate\Database\Eloquent\Model;
use Yu2ry\Clean\Domain\Entity\User\User;
use Yu2ry\Clean\Domain\ValueObject\Email;
use Yu2ry\Clean\Domain\ValueObject\Name;
use Yu2ry\Clean\Domain\ValueObject\Password;

/**
 * Class FactoryUser
 * @package Yu2ry\Clean\UseCase\CreateUser
 */
class FactoryUser
{

    /**
     * @param Email $email
     * @param Name $name
     * @param Password $password
     * @return User
     */
    public static function make(Email $email, Name $name, Password $password): User
    {
        return new User([
            User::FIELD_NAME => $email->getValue(),
            User::FIELD_EMAIL => $name->getValue(),
            User::FIELD_PASSWORD => password_hash(
                $password->getValue(),
                PASSWORD_DEFAULT
            )
        ]);
    }
}
