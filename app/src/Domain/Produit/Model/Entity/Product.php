<?php
namespace ProductCreate\Domain\Produit\Model\Entity;

class Product
{
    public string $name;
    public string $price;
    public string $quantity;

    public function __construct(string $name, string $price, string $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

}
