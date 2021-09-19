<?php

namespace Yu2ry\Clean\Domain\ValueObject;

/**
 * Class AbstractObject
 * @package Yu2ry\Clean\Domain\ValueObject
 */
abstract class AbstractObject
{

    /**
     * @throws \Exception
     * @return void
     */
    abstract protected function validate(): void;
}