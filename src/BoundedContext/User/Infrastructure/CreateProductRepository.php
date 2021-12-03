<?php

declare(strict_types=1);

namespace src\BoundedContext\User\Infrastructure;

use Illuminate\Http\Request;
use src\BoundedContext\User\Application\CreateProdoctUseCase;
use src\BoundedContext\User\Application\GetProductByCriteriaUseCase;
use src\BoundedContext\User\Infrastructure\EloquentRepository\EloquentProductRepository;

final class CreateProductRepository
{
    private $repository;

    public function __construct(EloquentProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        $producName = $request->input('name');
        $productPrice = $request->input('price');
        $productQuantity = $request->input('quantity');

        $createProductUseCase = new CreateProdoctUseCase($this->repository);
        $createProductUseCase->__invoke(
            $producName,
            $productPrice,
            $productQuantity
        );

        $getProductByCriterUseCase = new GetProductByCriteriaUseCase($this->repository);
        $product = $getProductByCriterUseCase->__invoke($producName, $productPrice, $productQuantity);

        return $product;
    }
}
