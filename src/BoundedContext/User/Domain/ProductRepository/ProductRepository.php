<?php
declare(strict_types=1);
namespace src\BoundedContext\User\Domain\ProductRepository;


use src\BoundedContext\User\Domain\Product;
use src\BoundedContext\User\Domain\ValueObject\ProductName;
use src\BoundedContext\User\Domain\ValueObject\ProductPrice;
use src\BoundedContext\User\Domain\ValueObject\ProductQuantity;

interface ProductRepository
{
    public function save(Product $product): void;

    public function findByCriteria(ProductName $productName, ProductPrice $productPrice, ProductQuantity $productQuantity): ?Product;
}
