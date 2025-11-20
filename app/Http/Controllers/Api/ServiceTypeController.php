<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceTypeRequest;
use App\Services\ServiceTypeService;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    public $serviceType;

    public function __construct(ServiceTypeService $serviceTypeService)
    {
        $this->serviceType = $serviceTypeService;
    }

    /**
     * @group Service Types
     * Get all service types
     *
     * Returns a list of all available service types.
     *
     * @response 200 scenario="Success" {
     *   "id": 1,
     *   "name": "Electricity",
    
     * }
     */
    public function index()
    {
        return $this->serviceType->getAll();
    }

    /**
     * @group Service Types
     * Get a service type by ID
     *
     * Retrieve the details of a specific service type.
     *
     * @urlParam id integer required The ID of the service type. Example: 1
     *
     * @response 200 scenario="Success" {
     *   "id": 1,
     *   "name": "Plumbing",
     *   "description": "Water and pipe services",
     *   "status": "active"
     * }
     *
     * @response 404 scenario="Not Found" {
     *   "message": "Service Type not found"
     * }
     */
    public function show($id)
    {
        return $this->serviceType->getById($id);
    }

}
