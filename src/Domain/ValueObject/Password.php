<?php

namespace Yu2ry\Clean\Domain\ValueObject;

use DomainException;

/**
 * Class Password
 * @package Yu2ry\Clean\Domain\ValueObject
 */
class Password extends AbstractObject
{

    /**
     * @var string
     */
    protected $value;

    /**
     * Password constructor.
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
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $this->value)) {
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
