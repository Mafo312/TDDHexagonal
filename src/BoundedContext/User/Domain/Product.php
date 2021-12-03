<?php
declare(strict_types=1);

namespace src\BoundedContext\User\Domain;

use src\BoundedContext\User\Domain\ValueObjet\ProductName;
use src\BoundedContext\User\Domain\ValueObject\ProductPrice;
use src\BoundedContext\User\Domain\ValueObject\ProductQuantity;


final class Product
{
    private $name;
    private $price;
    private $quantity;

    public function __construct(
        ProductName $name,
        ProductPrice $price,
        ProductQuantity $quantity
    )
    {
        $this->price = $name;
        $this->price  = $price;
        $this->quantity = $quantity;
    }

    public function name():ProductName
    {
        return $this->name;
    }

    public function price(): ProductPrice
    {
        return $this->price;
    }

    public function quantity(): ProductQuantity
    {
        return $this->quantity;
    }

    public static function create(
        ProductName $name,
        ProductPrice $price,
        ProductQuantity $quantity
    ): Product
    {
        $product = new self($name, $price, $quantity);

        return $product;
    }
}
