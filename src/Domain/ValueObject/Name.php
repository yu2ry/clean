<?php

namespace Yu2ry\Clean\Domain\ValueObject;

use DomainException;

/**
 * Class Name
 * @package Yu2ry\Clean\Domain\ValueObject
 */
class Name extends AbstractObject
{

    /**
     * @var string
     */
    protected $value;

    /**
     * Name constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
        $this->validate();
    }

    /**
     * @return void
     */
    protected function validate(): void
    {
        $len = mb_strlen($this->value);
        if ($len < 2 || $len > 20) {
            throw new DomainException(sprintf('%s invalid', $this->value));
        }
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
