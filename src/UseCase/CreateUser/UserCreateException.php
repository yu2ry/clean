<?php

namespace Yu2ry\Clean\UseCase\CreateUser;

use Exception;

/**
 * Class CreateUserException
 * @package Yu2ry\Clean\UseCase\CreateUser
 */
class UserCreateException extends Exception
{

    /**
     * @return UserCreateException
     */
    public static function existsEmail(): self
    {
        return new self('Duplicate Email');
    }
}