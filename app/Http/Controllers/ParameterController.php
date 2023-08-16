<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParameterRequest;
use App\Http\Requests\UpdateParameterRequest;
use App\Models\Parameter;
use Illuminate\Http\JsonResponse;

class ParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list(): JsonResponse
    {
        response()->json(Parameter::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreParameterRequest $request): JsonResponse
    {
        $data = $request->validate([
            'name' => 'required|string',
            'possible_values' => 'required|string',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParameterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Parameter $parameter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parameter $parameter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParameterRequest $request, Parameter $parameter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parameter $parameter)
    {
        //
    }
}
