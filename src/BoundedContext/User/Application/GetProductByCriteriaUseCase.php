<?php
declare(strict_types=1);

namespace src\BoundedContext\User\Application;


use src\BoundedContext\User\Domain\ProductRepository\ProductRepository;
use src\BoundedContext\User\Domain\ValueObject\ProductName;
use src\BoundedContext\User\Domain\ValueObject\ProductPrice;
use src\BoundedContext\User\Domain\ValueObject\ProductQuantity;

final class GetProductByCriteriaUseCase
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(string $productName, integer $productQuantity, float $productPrice)
    {
        $name = new ProductName($productName);
        $price = new ProductPrice($productPrice);
        $quantity = new  ProductQuantity($productQuantity);

        $product = $this->repository->findByCriteria($name, $price, $quantity);

        return $product;
    }
}
