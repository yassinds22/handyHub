<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequestRequest;
use App\Services\ServiceRequestService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceRequestController extends Controller
{
    public $serviceRequestService;

    public function __construct(ServiceRequestService $serviceRequestService){
        $this->serviceRequestService = $serviceRequestService;
    }

    /**
     * @group Service Requests
     * @authenticated
     * Get all service requests
     *
     * Returns a list of all service requests.
     *
     * @response 200 scenario="Success" [
     *   {
     *     "service_request_id": 1,
     *     "service_id": 5,
     *     "description": "Fix electricity problem",
     *     "province_id": 3,
     *     "latitude": "15.3694",
     *     "longitude": "44.1910",
     *     "execution_date": "2025-02-15",
     *     "status": "pending",
     *     "user_id": 10,
     *     "image": "http://example.com/storage/image.jpg"
     *   }
     * ]
     */
    public function index()
    {
        $service_requests = $this->serviceRequestService->getAll();

        $formatted = $service_requests->map(function ($sr) {
            return [
                'service_request_id' => $sr->id,
                //'name_send_service_request' => $sr->user->name,
                'service_id' => $sr->service_id,
                'service_name' => $sr->service->name,
                'description' => $sr->description,
                'province_id' => $sr->province_id,
                'province_id' => $sr->province->name,
                'latitude' => $sr->latitude,
                'longitude' => $sr->longitude,
                'execution_date' => $sr->execution_date,
                'status' => $sr->status,
                'user_id' => $sr->user_id,
                'user_name' => $sr->user->name,
                'image' => $sr->getFirstMedia('image_service_request')?->getUrl(),
            ];
        });

        return response()->json($formatted);
    }

    /**
     * @group Service Requests
     * @authenticated
     * Create a new service request
     *
     * @bodyParam service_id integer required The service ID.
     * @bodyParam description string required Description of the request.
     * @bodyParam province_id integer required Province ID.
     * @bodyParam latitude string required Latitude.
     * @bodyParam longitude string required Longitude.
     * @bodyParam execution_date date required Execution date. Example: 2025-02-15
     * @bodyParam image file Optional image.
     *
     * @response 201 scenario="Created" {
     *   "status": true,
     *   "message": "Service request created successfully",
     *   "data": {
     *     "service_id": 5,
     *     "description": "Electricity problem",
     *     "province_id": 3,
     *     "latitude": "15.0",
     *     "longitude": "44.1",
     *     "execution_date": "2025-02-15",
     *     "user_id": 1
     *   }
     * }
     */
    public function store(StoreServiceRequestRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        $this->serviceRequestService->saveServiceRequse($data, $request->file('image'));

        return response()->json([
            'status' => true,
            'message' => 'Service request created successfully',
            'data' => $data
        ], 201);
    }

    /**
     * @group Service Requests
     * @authenticated
     * Get a single service request
     *
     * @urlParam id integer required The ID of the service request.
     *
     * @response 200 scenario="Success" {
     *   "service_request_id": 1,
     *   "service_id": 5,
     *   "description": "Water leaking",
     *   "province_id": 3,
     *   "latitude": "15.2",
     *   "longitude": "44.3",
     *   "execution_date": "2025-02-16",
     *   "status": "completed",
     *   "user_id": 10,
     *   "image": "http://example.com/storage/image.jpg"
     * }
     */
    public function show(string $id)
    {
        $sr = $this->serviceRequestService->getById($id);

        return response()->json([
            'service_request_id' => $sr->id,
            'service_id' => $sr->service_id,
            'description' => $sr->description,
            'province_id' => $sr->province_id,
            'latitude' => $sr->latitude,
            'longitude' => $sr->longitude,
            'execution_date' => $sr->execution_date,
            'status' => $sr->status,
            'user_id' => $sr->user_id,
            'image' => $sr->getFirstMedia('image_service_request')?->getUrl(),
        ]);
    }

    /**
     * @group Service Requests
     * @authenticated
     * Update a service request
     *
     * @urlParam id integer required The ID of the service request.
     *
     * @bodyParam service_id integer optional Service ID.
     * @bodyParam description string optional Description.
     * @bodyParam province_id integer optional Province ID.
     * @bodyParam latitude string optional Latitude.
     * @bodyParam longitude string optional Longitude.
     * @bodyParam execution_date date optional Execution date.
     * @bodyParam image file optional Image.
     *
     * @response 200 scenario="Updated" {
     *   "status": true,
     *   "message": "Service request updated successfully",
     *   "data": {
     *     "service_id": 5,
     *     "description": "Updated description"
     *   }
     * }
     */
    public function update(StoreServiceRequestRequest $request, string $id)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        $this->serviceRequestService->updateServiceRequest($id, $data, $request->file('image'));

        return response()->json([
            'status' => true,
            'message' => 'Service request updated successfully',
            'data' => $data
        ], 200);
    }

    /**
     * @group Service Requests
     * @authenticated
     * Delete a service request
     *
     * @urlParam id integer required The ID of the service request to delete.
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Service request deleted successfully",
     *   "data": true
     * }
     */
    public function destroy($id)
    {
        $data = $this->serviceRequestService->deleteServiceRequest($id);

        return response()->json([
            'status' => true,
            'message' => 'Service request deleted successfully',
            'data' => $data
        ], 200);
    }
}
