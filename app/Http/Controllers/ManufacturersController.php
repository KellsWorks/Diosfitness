<?php

namespace App\Http\Controllers;

use App\Models\Manufacturers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ManufacturersController extends Controller
{
    /**Create Model Entry */
    public function register(Request $request) : JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'mobile' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'status' => 'required|string'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->errors()
            ]);
        }

        Manufacturers::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 1
        ]);

        return response()->json([
            'message' => 'Manufacturer created successfully'
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
