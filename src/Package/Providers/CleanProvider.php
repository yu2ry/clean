<?php

namespace Yu2ry\Clean\Package\Providers;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use Yu2ry\Clean\Adapters\Presenters\Contracts\UserPresenter as UserPresenterContract;
use Yu2ry\Clean\Adapters\Presenters\UserPresenter;
use Yu2ry\Clean\Domain\Repository\UserRepository;
use Yu2ry\Clean\Infa\Repository\DB\ORM\EloquentUserRepository;

/**
 * Class CleanProvider
 * @package Yu2ry\Clean\Package\Providers
 */
class CleanProvider extends ServiceProvider
{

    /**
     * @var string[]
     */
    protected $bindings = [
        UserRepository::class => EloquentUserRepository::class,
        UserPresenterContract::class => UserPresenter::class
    ];

    /**
     * @return void
     */
    public function register(): void
    {
        foreach ($this->bindings as $abstract => $concrete) {
            Container::getInstance()->singleton(
                $abstract,
                $concrete
            );
        }
    }
}
