<?php

namespace App\Http\Controllers;

use App\Models\FamilyHistory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFamilyHistoryRequest;
use App\Http\Requests\UpdateFamilyHistoryRequest;

class FamilyHistoryController extends Controller
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
    public function store(StoreFamilyHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FamilyHistory $familyHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FamilyHistory $familyHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFamilyHistoryRequest $request, FamilyHistory $familyHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FamilyHistory $familyHistory)
    {
        //
    }
}
