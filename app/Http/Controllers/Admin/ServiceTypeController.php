<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Services\ServiceTypeService;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
      public $serviceType;
    public function __construct(ServiceTypeService $serviceTypeService){
        $this->serviceType=$serviceTypeService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->serviceType->getAll();
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
    public function store(StoreServiceRequest $request)
    {
        return $this->serviceType->saveserviceType($request->validated());
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->serviceType->getById($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->serviceType->updateserviceType($id,$request->validated());
        
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       return $this->serviceType->deleteserviceTypeById($id);
      
        //
    }
}
