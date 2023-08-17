<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Carbon\Carbon;
use Exception;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::paginate(10);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
        try {
            $product = Product::insert([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            // Product::insert($request->all());

            return response([
                'message' => 'Successful'
            ]);
        }
        // 
        catch (Exception $excpetion) {
            return response([
                'message' => 'Error',
                'excpetion' => $excpetion
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($product)
    {
        try {
            $data = Product::find($product);
            return $data;
        }
        // 
        catch (Exception $excpetion) {
            return response([
                'message' => 'Error',
                'excpetion' => $excpetion
            ], 400);
        }
    }

    public function showWithReviews($product)
    {
        try {
            $data = Product::find($product);
            $data->load('reviews');
            return $data;
        }
        // 
        catch (Exception $excpetion) {
            return response([
                'message' => 'Error',
                'excpetion' => $excpetion
            ], 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateProductRequest $request)
    {
        //
        try {
            Product::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
            ]);
            return response([
                'message' => 'Successful'
            ]);
        }
        // 
        catch (Exception $excpetion) {
            return response([
                'message' => 'Error',
                'excpetion' => $excpetion
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::findOrFail($id)->delete();
        return response([
            'message' => 'Your id ' . $id . ' deleted',
        ]);
    }
}
