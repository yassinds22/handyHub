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
        $this->serviceRequestService=$serviceRequestService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service_request= $this->serviceRequestService->getAll();
              
           $formatted = $service_request->map(function ($service_request) {
            return [
                'service_request_id'=> $service_request->id,
                'service_id'=> $service_request->service_id,
                'description' => $service_request->description,
                'province_id' => $service_request->province_id,
                
                'latitude'=>$service_request->latitude,
                'longitude'=>$service_request->longitude,
                'execution_date'=>$service_request->execution_date,
                'status'=>$service_request->status,
                'user_id'=>$service_request->user_id,

                'image'       => $service_request->getFirstMedia('image_service_request')?->getUrl(),
            ];
        });

        // Return JSON response
        return response()->json($formatted);
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
    public function store(StoreServiceRequestRequest $request)
    {
        $data=$request->validated();
        $data['user_id']=Auth::id();
         $this->serviceRequestService->saveServiceRequse($data,$request->file('image'));
               return response()->json([
        'status' => true,
        'message' => 'successfully!',
        'data' => $data
    ], 201);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $service_request= $this->serviceRequestService->getById($id);
        
          
            return response()->json( [
                'service_request_id'=> $service_request->id,
                'service_id'=> $service_request->service_id,
                'description' => $service_request->description,
                'province_id' => $service_request->province_id,
                
                'latitude'=>$service_request->latitude,
                'longitude'=>$service_request->longitude,
                'execution_date'=>$service_request->execution_date,
                'status'=>$service_request->status,
                'user_id'=>$service_request->user_id,

                'image' => $service_request->getFirstMedia('image_service_request')?->getUrl(),
           ] );
     
        
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(StoreServiceRequestRequest $request, string $id)
    {
        $data=$request->validated();
        $data['user_id']=Auth::id();
         $this->serviceRequestService->updateServiceRequest($id,$data,$request->file('image'));
             return response()->json([
        'status' => true,
        'message' => 'successfully!',
        'data' => $data
    ], 201);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $data= $this->serviceRequestService->deleteServiceRequest($id);
      
            return response()->json([
        'status' => true,
        'message' => 'successfully!',
        'data' => $data
    ], 201);

          
    

        
        
       
        //
    }

    

}
