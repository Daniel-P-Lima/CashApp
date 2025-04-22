<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWasteRequest;
use App\Http\Resources\Api\WasteResource;
use App\Models\waste;

class WasteController extends Controller
{
    public function index()
    {
        return WasteResource::collection(Waste::all());
    }

    public function show(Waste $waste){
        return new WasteResource($waste);
    }

    public function store(StoreWasteRequest $request) {
        Waste::create($request->validated());
        return response()->json(['message' => 'Gasto Criado!']);
    }

    public function update(StoreWasteRequest $request, Waste $waste) {
        $waste->update($request->validated());
        return response()->json(['message' => 'Gasto Editado!']);
    }

    public function destroy(Waste $waste) {
        $waste->delete();
        return response()->json(['message' => 'Gasto Excluído!']);
    }
    
}

