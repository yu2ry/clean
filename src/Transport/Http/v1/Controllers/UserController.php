<?php

namespace Yu2ry\Clean\Transport\Http\v1\Controllers;

use Yu2ry\Clean\Adapters\Presenters\Contracts\UserPresenter;
use Yu2ry\Clean\Transport\Http\Controller;
use Yu2ry\Clean\Transport\Http\v1\Requests\User\StoreRequest;
use Yu2ry\Clean\Transport\Http\v1\Resources\UserCreateResource;

/**
 * Class UserController
 * @package Yu2ry\Clean\Transport\Http\v1\Controllers
 */
class UserController extends Controller
{

    /**
     * @var UserPresenter
     */
    protected $presenter;

    /**
     * UserController constructor.
     * @param UserPresenter $presenter
     */
    public function __construct(UserPresenter $presenter)
    {
        $this->presenter = $presenter;
    }

    /**
     * @param StoreRequest $request
     * @return UserCreateResource
     */
    public function store(StoreRequest $request): UserCreateResource
    {
        return $this
            ->presenter
            ->userCreated(
                $request->getEmail(),
                $request->getName(),
                $request->getUserPassword()
            )
            ->getResponse();
    }
}
