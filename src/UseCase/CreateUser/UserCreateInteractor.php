<?php

namespace Yu2ry\Clean\UseCase\CreateUser;

use Yu2ry\Clean\Domain\Entity\User\UserCreateEvent;
use Yu2ry\Clean\Domain\Repository\UserRepository;

/**
 * Class CreateUser
 * @package Yu2ry\Clean\UseCase\CreateUser
 */
class UserCreateInteractor
{

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * CreateUser constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param UserCreateInputData $inputData
     * @return UserCreateOutputData
     * @throws UserCreateException
     */
    public function execute(UserCreateInputData $inputData): UserCreateOutputData
    {
        if ($this->userRepository->existsByEmail($inputData->getEmail())) {
            throw UserCreateException::existsEmail();
        }

        $user = $this
            ->userRepository
            ->save(
                FactoryUser::make(
                    $inputData->getEmail(),
                    $inputData->getName(),
                    $inputData->getPassword()
                )
            );

        $user->addEvent(UserCreateEvent::class);

        return new UserCreateOutputData($user);
    }
}
