<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccessControlRequest;
use App\Http\Requests\UpdateAccessControlRequest;
use App\Models\AccessControl;

class AccessControlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccessControlRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AccessControl $accessControl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AccessControl $accessControl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccessControlRequest $request, AccessControl $accessControl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AccessControl $accessControl)
    {
        //
    }
}
