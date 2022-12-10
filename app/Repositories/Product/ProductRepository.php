<?php

namespace App\Repositories\Product;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use NamTran\LaravelMakeRepositoryService\Repository\BaseRepository;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return Product::class;
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $products = $this->model->get();
        return response()->json($products, 200);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function storeProduct($data): mixed
    {
        $product = $this->model->create([
           'name' => $data['name'],
           'description' => $data['description'],
           'price' => $data['price'],
        ]);

        return response()->json(['product' => $product, 'message' => 'Product created successfully!!!'], 201);
    }

    /**
     * @param $id
     * @return JsonResponse|string
     */
    public function showProduct($id): JsonResponse|string
    {
        try {
            $product = $this->model->where('id', $id)->firstOrFail();
            return response()->json($product, 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}
