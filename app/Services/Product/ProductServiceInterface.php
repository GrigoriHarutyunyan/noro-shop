<?php

namespace App\Services\Product;

interface ProductServiceInterface
{
    /**
     * @return mixed
     */
    public function index(): mixed;

    /**
     * @param $request
     * @return mixed
     */
    public function storeProduct($request): mixed;

    /**
     * @param $id
     * @return mixed
     */
    public function showProduct($id): mixed;

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function updateProduct($request, $id);
}
