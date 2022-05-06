<?php

namespace App\Http\Controllers;

use App\Models\CustomersReviews;
use App\Http\Requests\StoreCustomersReviewsRequest;
use App\Http\Requests\UpdateCustomersReviewsRequest;

class CustomersReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomersReviewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomersReviewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomersReviews  $customersReviews
     * @return \Illuminate\Http\Response
     */
    public function show(CustomersReviews $customersReviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomersReviews  $customersReviews
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomersReviews $customersReviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomersReviewsRequest  $request
     * @param  \App\Models\CustomersReviews  $customersReviews
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomersReviewsRequest $request, CustomersReviews $customersReviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomersReviews  $customersReviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomersReviews $customersReviews)
    {
        //
    }
}
