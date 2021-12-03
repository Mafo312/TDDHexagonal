<?php
namespace src\BoundedContext\User\Infrastructure;

use Illuminate\Http\Request;
use src\BoundedContext\User\Application\GetProductByCriteriaUseCase;
use src\BoundedContext\User\Infrastructure\EloquentRepository\EloquentProductRepository;

final class GetProduitByCriterRepository
{
    private $repository;

    public function __construct(EloquentProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {
        $productName = $request->input('name');
        $productPrice = $request->input('price');
        $productQuantity = $request->input('quantity');

        $getProductByCriteriaUseCase = new GetProductByCriteriaUseCase($this->repository);

        $product = $getProductByCriteriaUseCase->__invoke($productName, $productPrice, $productQuantity);

        return $product;
    }
}
