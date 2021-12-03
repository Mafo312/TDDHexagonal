<?php
namespace ProductCreate\Domain\Produit\Model\Repository;

use ProductCreate\Domain\Produit\Model\Entity\Product;

interface ProductRepositoryInterface
{
    public function save(Product $product): Product;
    public function findOne(string $name): ?Product;
}
