<?php

declare(strict_types=1);

namespace src\BoundedContext\User\Infrastructure\EloquentRepository;


use App\Models\Product;
use src\BoundedContext\User\Domain\ProductRepository\ProductRepository;

final class EloquentProductRepository implements ProductRepository
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function save(\src\BoundedContext\User\Domain\Product $product): void
    {
        $newProduc = $this->product;

        $data = [
            'name' => $product->name()->value(),
            'price' => $product->price()->value(),
            'quantity' => $product->quantity()->value()
        ];

        $newProduc->create($data);

    }
}
