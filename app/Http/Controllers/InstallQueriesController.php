<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstallQueriesController extends Controller
{
    /**Create Model Entry */
    public function create(Request $request) : JsonResponse
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
