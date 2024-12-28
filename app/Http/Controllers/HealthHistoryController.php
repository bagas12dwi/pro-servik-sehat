<?php

namespace App\Http\Controllers;

use App\Models\HealthHistory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHealthHistoryRequest;
use App\Http\Requests\UpdateHealthHistoryRequest;

class HealthHistoryController extends Controller
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
    public function store(StoreHealthHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HealthHistory $healthHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HealthHistory $healthHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHealthHistoryRequest $request, HealthHistory $healthHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HealthHistory $healthHistory)
    {
        //
    }
}
