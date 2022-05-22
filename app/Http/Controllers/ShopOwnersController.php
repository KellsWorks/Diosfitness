<?php

namespace App\Http\Controllers;

use App\Models\ShopOwners;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ShopOwnersController extends Controller
{
    public function register(Request $request){

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

        ShopOwners::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 1
        ]);

        return response()->json([
            'message' => 'Technician created successfully'
        ], 200);

    }

    public function login(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->errors()
            ]);
        }

        $technician = ShopOwners::where("email", $request->email)->first();
        if(!$technician || !Hash::check($request->password, $technician->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
                'success' => true,
                'technician' => $technician, 
                'token' => $technician->createToken('Generate-Technician-Token')->plainTextToken
        ], 200);
    }
}
