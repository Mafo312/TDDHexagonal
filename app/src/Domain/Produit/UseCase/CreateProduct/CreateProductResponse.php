<?php

namespace ProductCreate\Domain\Produit\UseCase\CreateProduct;

use ProductCreate\Domain\Produit\Model\Entity\Product;

class CreateProductResponse
{
    public $product;
    public $errors;

    public function addError()
    {
    }

    public function setProduct(Product $product)
    {
        $this->product = $product;

        return $this;
    }

}
