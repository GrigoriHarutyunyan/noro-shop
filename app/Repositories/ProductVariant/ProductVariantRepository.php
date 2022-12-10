<?php

namespace App\Repositories\ProductVariant;

use NamTran\LaravelMakeRepositoryService\Repository\BaseRepository;
use App\Repositories\ProductVariant\ProductVariantRepositoryInterface;

class ProductVariantRepository extends BaseRepository implements ProductVariantRepositoryInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        //return;
    }
}
