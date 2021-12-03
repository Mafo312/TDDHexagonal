<?php

namespace ProductCreate\Domain\Produit\UseCase\CreateProduct;

use ProductCreate\Domain\Produit\Model\Entity\Product;
use ProductCreate\Domain\Produit\Model\Repository\ProductRepositoryInterface;

class CreateProductUseCase
{
    protected  ProductRepositoryInterface $ProductRepositotry;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->ProductRepositotry = $repository;
    }

    public function execute(CreateProductRequest $request, CreateProductPresenter $presenter)
    {
        $response = new CreateProductResponse();

        if ($request->name == null || $request->price == null || $request->quantity == null)
        {
            $response->addError();
        }else{
            $product = new Product(
                $request->name,
                $request->price,
                $request->quantity
            );

            $this->ProductRepositotry->save($product);
            $response->setProduct($product);
        }
        return $presenter->present($response);
    }
}
