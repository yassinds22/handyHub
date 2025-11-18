<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceTypeRequest;
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
     * Display the specified resource.
     */
    public function show( $id)
    {
       return $this->serviceType->getById($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

}
