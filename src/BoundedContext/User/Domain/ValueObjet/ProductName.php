<?php
declare(strict_types=1);

namespace src\BoundedContext\User\Domain\ValueObject;

final class ProductName
{
    private $value;

    public function __construct(string $name)
    {
        $this->value = $name;
    }

    public function value(): string
    {
        return $this->value;
    }
}

