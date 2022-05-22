<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomersController extends Controller
{
    public function create(Request $request) : JsonResponse
    {
        $validator = Validator::make($request->all, [
            'username' => 'required|string',
            'email' => 'required|email',
            'address1' => 'required|string',
            'address2' => 'required|string'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->errors()
            ]);
        }

        Customers::create([
            'username' => $request->username,
            'email' => $request->email,
            'address1' => $request->address1,
            'address2' => $request->address2
        ]);

        return response()->json([
            'message' => 'Customer added successfully'
        ], 200);
    }
}
