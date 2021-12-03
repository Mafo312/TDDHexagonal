<?php
declare(strict_types=1);

namespace src\BoundedContext\User\Domain\ValueObject;

final class ProductPrice
{
    private $value;

    public function __construct(string $price)
    {
        $this->value = $price;
    }

    public function value(): float
    {
        return $this->value;
    }
}

