<?php

namespace Yu2ry\Clean\Domain\Entity\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package Yu2ry\Clean\Domain\Entity
 */
class User extends Model
{

    public const FIELD = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_EMAIL = 'email';
    public const FIELD_PASSWORD = 'password';

    /**
     * @var string[]
     */
    protected $fillable = [
        self::FIELD_NAME,
        self::FIELD_EMAIL,
        self::FIELD_PASSWORD
    ];

    /**
     * @var array
     */
    protected $events = [];

    /**
     * @param $event
     */
    public function addEvent($event): void
    {
        $this->events[] = $event;
    }
}
