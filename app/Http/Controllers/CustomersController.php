<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function create(Request $request) : JsonResponse
    {
        return response()->json([
            'message' => 'Customer added successfully'
        ], 200);
    }
}
