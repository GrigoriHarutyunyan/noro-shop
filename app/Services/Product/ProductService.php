<?php

namespace App\Services\Product;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Services\Product\ProductServiceInterface;

class ProductService implements ProductServiceInterface
{

    private ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @return mixed
     */
    public function index(): mixed
    {
        return $this->productRepository->index();
    }

    /**
     * @param $request
     * @return mixed
     */
    public function storeProduct($request): mixed
    {
        $data = $request->validated();
        return $this->productRepository->storeProduct($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function showProduct($id): mixed
    {
        return $this->productRepository->showProduct($id);
    }

    public function updateProduct($request, $id) {
        $data = $request->validated();
    }
}
