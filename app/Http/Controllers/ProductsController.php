<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function create(Request $request) : JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'reference_number' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|string',
            'installation_price' => 'required|string',
            'service_charge' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,jiff,blob'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->errors()
            ]);
        }

        if($request->file('image')){

            $path = $request->file('image')->store('/products');

            $name = $request->file('image')->getClientOriginalName();

            Products::create([
                'reference_number' => $request->reference_number,
                'name' => $request->name,
                'description' => $request->description,
                'image' => $request->image,
                'installation_price' => $request->installation_price,
                'service_charge' => $request->service_charge,
                'image' => $name
            ]);
        }

        return response()->json([
            'message' => 'Product added successfully'
        ]);
    }

    public function getProducts(Request $request){

        return response()->json([
            'products' => Products::all()
        ]);
    }

    public function getProductsByManufacturer(Request $request){

        return response()->json([
            'products' => Products::where('manufacturer_id', $request->manufacturer_id)->get()
        ]);
    }

    public function delete(Request $request){

        Products::find($request->id)->delete();

        return response()->json([
            'message' => 'Product deleted successfully'
        ]);

    }
}
