<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWorkerRequest;
use App\Services\workerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkerController extends Controller
{
    public $workerService;

    public function __construct(workerService $workerService)
    {
        $this->workerService = $workerService;
    }

    /**
     * @group Workers
     * @authenticated
     * Get all workers
     *
     * Returns a list of all workers.
     *
     * @response 200 scenario="Success" [
     *   {
     *     "worker_id": 1,
     *     "worker_name": "yassin",
     *     "worker_phone": "7777777777",
     *     "service_id": 5,
     *     "service_name": "كهربائي",
     *     "experience_years": 3,
     *     "bio": "Expert electrician",
     *     "province_id": 3,
     *     "province_name": "صنعاء",
     *     "latitude": "15.36",
     *     "longitude": "44.19",
     *     "execution_date": "2025-02-19",
     *     "status": "available",
     *     "user_id": 10,
     *     "user_name": "yassin",
     *     "image": "http://example.com/storage/image.jpg"
     *   }
     * ]
     */
    public function index()
    {
        $workers = $this->workerService->getAll();
        
        $formatted = $workers->map(function ($worker) {
            return [
                'worker_id' => $worker->id,
                'worker_name' =>$worker->user->name,
                'worker_phone' =>$worker->user->phone,
                'service_id' => $worker->service_id,
                'service_name' => $worker->service->name,
                'experience_years' => $worker->experience_years,
                'bio' => $worker->bio,
                'province_id' => $worker->province_id,
                'province_name' => $worker->province->name,
               
                'latitude' => $worker->latitude,
                'longitude' => $worker->longitude,
                'execution_date' => $worker->execution_date,
                'status' => $worker->status,
                'user_id' => $worker->user_id,
                'user_id' => $worker->user->name,
                'image' => $worker->getFirstMedia('mages_url')?->getUrl(),
            ];
        });

        return response()->json($formatted);
    }

    /**
     * @group Workers
     * @authenticated
     * Create a new worker
     *
     * Use this endpoint to register a new worker in the system.
     *
     * @bodyParam service_id integer required The service ID. Example: 5
     * @bodyParam experience_years integer required Number of years of experience. Example: 4
     * @bodyParam bio string required Brief description about the worker.
     * @bodyParam province_id integer required Province ID. Example: 3
     * @bodyParam latitude string required Latitude. Example: 15.3694
     * @bodyParam longitude string required Longitude. Example: 44.1910
     * @bodyParam execution_date date required Available date. Example: 2025-03-01
     * @bodyParam image file Optional profile photo.
     *
     * @response 201 scenario="Created" {
     *   "status": true,
     *   "message": "Worker created successfully",
     *   "data": {
     *     "service_id": 5,
     *     "experience_years": 4,
     *     "bio": "Expert plumber",
     *     "province_id": 3,
     *     "latitude": "15.3694",
     *     "longitude": "44.1910",
     *     "execution_date": "2025-03-01",
     *     "user_id": 12
     *   }
     * }
     */
    public function store(StoreWorkerRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        $this->workerService->saveWorker($data, $request->file('image'));

        return response()->json([
            "status" => true,
            "message" => "Worker created successfully",
            "data" => $data
        ], 201);
    }

    /**
     * @group Workers
     * @authenticated
     * Get a worker by ID
     *
     * Returns worker details.
     *
     * @urlParam id integer required The ID of the worker. Example: 1
     *
     * @response 200 scenario="Success" {
     *  "worker_id": 1,
     *     "worker_name": "yassin",
     *     "worker_phone": "7777777777",
     *     "service_id": 5,
     *     "service_name": "كهربائي",
     *     "experience_years": 3,
     *     "bio": "Expert electrician",
     *     "province_id": 3,
     *     "province_name": "صنعاء",
     *     "latitude": "15.36",
     *     "longitude": "44.19",
     *     "execution_date": "2025-02-19",
     *     "status": "available",
     *     "user_id": 10,
     *     "user_name": "yassin",
     *     "image": "http://example.com/storage/image.jpg"
     * }
     *
     * @response 404 scenario="Not Found" {
     *   "message": "Worker not found"
     * }
     */
    public function show(string $id)
    {
        $worker= $this->workerService->getById($id);
            if (!$worker) {
        return response()->json([
            'status' => false,
            'message' => 'Worker not found'
        ], 404);
    }
          return response()->json(   [
                 'worker_id' => $worker->id,
                'worker_name' =>$worker->user->name,
                'worker_phone' =>$worker->user->phone,
                'service_id' => $worker->service_id,
                'service_name' => $worker->service->name,
                'experience_years' => $worker->experience_years,
                'bio' => $worker->bio,
                'province_id' => $worker->province_id,
                'province_name' => $worker->province->name,
               
                'latitude' => $worker->latitude,
                'longitude' => $worker->longitude,
                'execution_date' => $worker->execution_date,
                'status' => $worker->status,
                'user_id' => $worker->user_id,
                'user_name' => $worker->user->name,
                'image' => $worker->getFirstMedia('mages_url')?->getUrl(),
            ]);
       

        ;
    }

    /**
     * @group Workers
     * @authenticated
     * Update worker details
     *
     * @urlParam id integer required The worker ID. Example: 1
     *
     * @bodyParam service_id integer optional Updated service ID.
     * @bodyParam experience_years integer optional Updated years of experience.
     * @bodyParam bio string optional Updated biography.
     * @bodyParam province_id integer optional Province ID.
     * @bodyParam latitude string optional Latitude.
     * @bodyParam longitude string optional Longitude.
     * @bodyParam execution_date date optional Updated date.
     * @bodyParam image file optional Updated worker image.
     *
     * @response 200 scenario="Updated" {
     *   "status": true,
     *   "message": "Worker updated successfully",
     *   "data": {
     *     "experience_years": 5,
     *     "bio": "Updated worker info"
     *   }
     * }
     */
    public function update(StoreWorkerRequest $request, string $id)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        $this->workerService->updateWorker($id, $data, $request->file('image'));

        return response()->json([
            "status" => true,
            "message" => "Worker updated successfully",
            "data" => $data
        ], 200);
    }
}
