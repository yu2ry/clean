<?php

namespace Yu2ry\Clean\Adapters\ViewModels;

use Yu2ry\Clean\Transport\Http\v1\Resources\UserCreateResource;
use Yu2ry\Clean\UseCase\CreateUser\UserCreateOutputData;

/**
 * Class UserCreateViewModel
 * @package Yu2ry\Clean\Adapters\ViewModels
 */
class UserCreateViewModel
{

    /**
     * @var UserCreateOutputData
     */
    protected $output;

    /**
     * UserCreateViewModel constructor.
     * @param UserCreateOutputData $output
     */
    public function __construct(UserCreateOutputData $output)
    {
        $this->output = $output;
    }

    /**
     * @return UserCreateResource
     */
    public function getResponse(): UserCreateResource
    {
        return new UserCreateResource(
            $this
                ->output
                ->getUser()
        );
    }
}
