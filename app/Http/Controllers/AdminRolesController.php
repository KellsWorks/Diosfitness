<?php

namespace App\Http\Controllers;

use App\Models\AdminRoles;
use App\Http\Requests\StoreAdminRolesRequest;
use App\Http\Requests\UpdateAdminRolesRequest;

class AdminRolesController extends Controller
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
     * @param  \App\Http\Requests\StoreAdminRolesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRolesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminRoles  $adminRoles
     * @return \Illuminate\Http\Response
     */
    public function show(AdminRoles $adminRoles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminRoles  $adminRoles
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminRoles $adminRoles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRolesRequest  $request
     * @param  \App\Models\AdminRoles  $adminRoles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRolesRequest $request, AdminRoles $adminRoles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminRoles  $adminRoles
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminRoles $adminRoles)
    {
        //
    }
}
