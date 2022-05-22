<?php

namespace App\Http\Controllers;

use App\Models\CustomersReviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomersReviewsController extends Controller
{
    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'review_text' => 'required',
            'customers_id' => 'required',
            'install_queries_id' => 'required',
            'star' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => $validator->errors()
            ]);
        }

        CustomersReviews::create([
            'customers_id' => $request->customers_id,
            'install_queries_id' => $request->install_queries_id,
            'star' => $request->star,
            'review_text' => $request->review_text
        ]);

        return response()->json([
            'message' => 'Review sent successfully!'
        ]);
    }
}
