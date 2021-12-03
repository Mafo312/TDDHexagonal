<?php

declare(strict_types=1);

namespace src\BoundedContext\User\Application;

use DateTime;
use phpDocumentor\Reflection\Types\Integer;
use src\BoundedContext\User\Domain\ProductRepository\ProductRepository;
use src\BoundedContext\User\Domain\ValueObject\ProductName;
use src\BoundedContext\User\Domain\ValueObject\ProductPrice;
use src\BoundedContext\User\Domain\ValueObject\ProductQuantity;

final class CreateProdoctUseCase
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(
        string $productName,
        Float $productPrice,
        Integer $productQuantity
    )
    {
        $name = new ProductName($productName);
        $price = new ProductPrice($productPrice);
        $quantity = new ProductQuantity($productQuantity);

        $product = Product::create($name, $price, $quantity);

        $this->repository->save($product);
    }
}
