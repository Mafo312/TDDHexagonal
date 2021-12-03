<?php
declare(strict_types=1);

namespace src\BoundedContext\User\Domain\ValueObject;

final class ProductQuantity
{
    private $value;

    public function __construct(string $quantity)
    {
        $this->value = $quantity;
    }

    public function value(): integer
    {
        return $this->value;
    }
}

