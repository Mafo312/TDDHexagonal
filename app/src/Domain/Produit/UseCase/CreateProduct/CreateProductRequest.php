<?php

namespace ProductCreate\Domain\Produit\UseCase\CreateProduct;

class CreateProductRequest
{
    public string $name = 'riz';
    public string $price = '200';
    public string $quantity = '3';
}
