<?php

namespace Yu2ry\Clean\UseCase\CreateUser;

use Yu2ry\Clean\Domain\Entity\User\User;
use Yu2ry\Clean\Domain\ValueObject\Email;
use Yu2ry\Clean\Domain\ValueObject\Name;
use Yu2ry\Clean\Domain\ValueObject\Password;

/**
 * Class UserCreateInputData
 * @package Yu2ry\Clean\UseCase\CreateUser
 */
class UserCreateInputData
{

    /**
     * @var Name
     */
    protected $name;

    /**
     * @var Email
     */
    protected $email;

    /**
     * @var Password
     */
    protected $password;

    /**
     * InputData constructor.
     * @param Name $name
     * @param Email $email
     * @param Password $password
     */
    public function __construct(Name $name, Email $email, Password $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return Name
     */
    public function getName(): Name
    {
        return $this->name;
    }

    /**
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }

    /**
     * @return Password
     */
    public function getPassword(): Password
    {
        return $this->password;
    }
}
