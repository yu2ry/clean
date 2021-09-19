<?php

namespace Yu2ry\Clean\Adapters\Presenters;

use Yu2ry\Clean\Adapters\ViewModels\UserCreateViewModel;
use Yu2ry\Clean\Domain\Repository\UserRepository;
use Yu2ry\Clean\Domain\ValueObject\Email;
use Yu2ry\Clean\Domain\ValueObject\Name;
use Yu2ry\Clean\Domain\ValueObject\Password;
use Yu2ry\Clean\UseCase\CreateUser\UserCreateInteractor;
use Yu2ry\Clean\UseCase\CreateUser\UserCreateException;
use Yu2ry\Clean\UseCase\CreateUser\UserCreateInputData;
use Yu2ry\Clean\Adapters\Presenters\Contracts\UserPresenter as UserPresenterContract;

/**
 * Class UserController
 * @package Yu2ry\Clean\Adapters\Controllers
 */
class UserPresenter implements UserPresenterContract
{

    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * UserPresenter constructor.
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $email
     * @param string $name
     * @param string $password
     * @return UserCreateViewModel
     * @throws UserCreateException
     */
    public function userCreated(string $email, string $name, string $password): UserCreateViewModel
    {
        $useCase = new UserCreateInteractor($this->repository);
        $out = $useCase
            ->execute(
                new UserCreateInputData(
                    new Name($name),
                    new Email($email),
                    new Password($password)
                )
            );
        return new UserCreateViewModel($out);
    }
}
