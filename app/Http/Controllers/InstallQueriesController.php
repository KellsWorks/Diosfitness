<?php

namespace App\Http\Controllers;

use App\Models\InstallQueries;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstallQueriesController extends Controller
{
    /**Create Model Entry */

    public function create(Request $request) : JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'products_id' => 'required|string',
            'customers_id' => 'required|string',
            'shop_owners_id' => 'required|string',
            'manufacturers_id' => 'required|string',
            'technicians_id' => 'required|string',
            'total_prices' => 'required|string',
            'payment_method' => 'required|string',
            'customers_id' => 'required|string',
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->errors()
            ]);
        }

        InstallQueries::create([
            'products_id' => $request->products_id,
            'customers_id' => $request->customers_id,
            'shop_owners_id' => $request->shop_owners_id,
            'manufacturers_id' => $request->manufacturers_id,
            'technicians_id' => $request->technicians_id,
            'total_prices' => $request->total_prices,
            'payment_method' => $request->payment_method,
            'customers_id' => $request->customers_id
        ]);

        return response()->json([
            'message' => 'Install Query Created successfully'
        ], 200);
    }

    /**Create Model Read */
    public function read(Request $request) : JsonResponse
    {
        $validator = Validator::make($request->all(), [

        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->errors()
            ]);
        }

        return response()->json([
            'message' => 'Created successfully'
        ], 200);
    }

    /**Create Model Update */
    public function update(Request $request) : JsonResponse
    {
        $validator = Validator::make($request->all(), [

        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->errors()
            ]);
        }

        return response()->json([
            'message' => 'Created successfully'
        ], 200);
    }

    /**Create Model Delete */
    public function delete(Request $request) : JsonResponse
    {
        $validator = Validator::make($request->all(), [

        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->errors()
            ]);
        }

        return response()->json([
            'message' => 'Created successfully'
        ], 200);
    }
}
