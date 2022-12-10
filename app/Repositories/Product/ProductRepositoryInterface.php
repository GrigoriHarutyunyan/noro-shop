<?php

namespace App\Repositories\Product;

use NamTran\LaravelMakeRepositoryService\Repository\RepositoryContract;

interface ProductRepositoryInterface extends RepositoryContract
{
    /**
     * @return mixed
     */
    public function index(): mixed;

    /**
     * @param $data
     * @return mixed
     */
    public function storeProduct($data): mixed;

    /**
     * @param $id
     * @return mixed
     */
    public function showProduct($id);
}
