<?php

namespace Tests\Unit\Domain\Product\UseCase\CreateProduct;

use PHPUnit\Framework\TestCase;
use ProductCreate\Domain\Produit\Model\Repository\ProductRepositoryInterface;
use ProductCreate\Domain\Produit\UseCase\CreateProduct\CreateProductPresenter;
use ProductCreate\Domain\Produit\UseCase\CreateProduct\CreateProductRequest;
use ProductCreate\Domain\Produit\UseCase\CreateProduct\CreateProductResponse;
use ProductCreate\Domain\Produit\UseCase\CreateProduct\CreateProductUseCase;
use Tests\Unit\Domain\Adapter\InMemoryProductRepository;

class CreateProductTest extends TestCase
{
    /**
     * @test
     */

    public function Create_Product_Test()
    {

        $repository = new InMemoryProductRepository();
        $useCase = new CreateProductUseCase($repository);
        $request = new CreateProductRequest();
        $response = new CreateProductResponse();
        $presenter = new CreateProductPresenter($response);

        $product = $useCase->execute($request, $presenter);

        $this->assertEquals($product->product  , $repository->findOne($product->product->name));
    }
}
