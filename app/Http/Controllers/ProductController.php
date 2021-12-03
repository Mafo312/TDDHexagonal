<?php

namespace App\Http\Controllers;

use App\http\Resource\ProductResource;
use Illuminate\Http\Request;
use src\BoundedContext\User\Infrastructure\CreateProductRepository;

class ProductController extends Controller
{
    //

    private $creatProductRepository;

    public function __construct(CreateProductRepository $creatProductRepository)
    {
        $this->creatProductRepository = $creatProductRepository;
    }

    public function __invoke(Request $request)
    {
        $newProduct = new ProductResource($this->creatProductRepository->__invoke($request));

        return response($newProduct, 201);
    }
}
