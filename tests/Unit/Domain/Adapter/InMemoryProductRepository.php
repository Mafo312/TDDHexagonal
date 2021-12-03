<?php

namespace Tests\Unit\Domain\Adapter;


use ProductCreate\Domain\Produit\Model\Entity\Product;
use ProductCreate\Domain\Produit\Model\Repository\ProductRepositoryInterface;

class InMemoryProductRepository implements ProductRepositoryInterface
{
    public array $products = [];

    public function save(Product $product) : Product
    {
        $this->products[$product->name] = $product;

        return $product;
    }

    public function findOne(string $name) : ?Product
    {
        return $this->products[$name] ?? null;
    }
}
