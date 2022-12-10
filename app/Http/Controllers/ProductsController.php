<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductsController extends Controller
{
    private ProductServiceInterface $productService;

    /**
     * @param ProductServiceInterface $productService
     */
    public function __construct(ProductServiceInterface $productService) {

        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->productService->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return JsonResponse|string
     */
    public function store(ProductRequest $request): JsonResponse|string
    {
        return $this->productService->storeProduct($request);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse|string
     */
    public function show(int $id): JsonResponse|string
    {
        return $this->productService->showProduct($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param int $id
     * @return Response
     */
    public function update(ProductRequest $request, int $id): Response
    {
        return $this->productService->updateProduct($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id): Response
    {
        //
    }
}
