<?php

namespace Yu2ry\Clean\Adapters\Presenters\Contracts;

use Yu2ry\Clean\Adapters\ViewModels\UserCreateViewModel;

/**
 * Interface UserPresenter
 * @package Yu2ry\Clean\Adapters\Presenters\User
 */
interface UserPresenter
{

    /**
     * @param string $email
     * @param string $name
     * @param string $password
     * @return UserCreateViewModel
     */
    public function userCreated(string $email, string $name, string $password): UserCreateViewModel;
}
