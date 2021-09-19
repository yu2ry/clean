<?php

namespace Yu2ry\Clean\Domain\ValueObject;

use DomainException;

/**
 * Class Email
 * @package Yu2ry\Clean\Domain\ValueObject
 */
class Email extends AbstractObject
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
     * @throw Exception
     */
    protected function validate(): void
    {
        if (!filter_var($this->value, FILTER_VALIDATE_EMAIL))
        {
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
