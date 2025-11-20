<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWorkerRequest;
use App\Repository\workerRepository;
use App\Services\workerService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkerController extends Controller
{
    public $workerService;
    public function __construct(workerService $workerService)
    {
        $this->workerService=$workerService;

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $worker= $this->workerService->getAll();
           $formatted = $worker->map(function ($worker) {
            return [
                'worker_id'=> $worker->id,
                'service_id'=> $worker->service_id,
                'experience_years' => $worker->experience_years,
                'bio' => $worker->bio,
                'province_id'=>$worker->province_id,
                'latitude'=>$worker->latitude,
                'longitude'=>$worker->longitude,
                'execution_date'=>$worker->execution_date,
                'status'=>$worker->status,
                'user_id'=>$worker->user_id,

                'image'       => $worker->getFirstMedia('mages_url')?->getUrl(),
            ];
        });

        // Return JSON response
        return response()->json($formatted);
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
    public function store(StoreWorkerRequest $request)
    {
         $data = $request->validated();
       $data['user_id'] = Auth::id();

         $this->workerService->saveWorker($data,$request->file('image'));
           return response()->json([
            "status"=>true,
            "message"=>"successfully save worker",
            "data"=>$data

           
           ],status:201);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->workerService->getById($id);
        //
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreWorkerRequest $request, string $id)
    {
        $data=$request->validated();
        $data['user_id']=Auth::id();
         $this->workerService->updateWorker($id,$data,$request->file('image'));
          return response()->json([
            "status"=>true,
            "message"=>"successfully update",
            "data"=>$data

           
           ],status:201);
        //
    }










     public function search(Request $request)
    {
        // 🔍 استخراج معايير البحث
        $provinceName = $request->get('province_name');
        $districtName = $request->get('district_name');
        $provinceId = $request->get('province_id');
        $districtId = $request->get('district_id');
        $userLat = $request->get('latitude');
        $userLng = $request->get('longitude');
        $searchTerm = $request->get('search');
        $radius = $request->get('radius', 3); // 3 كم افتراضي

        $filters = $request->only([
            'service_id', 'min_experience', 'search_term'
        ]);

        // تحديد نوع البحث بناءً على المعايير المتوفرة
       
        if ($provinceName || $districtName) {
            // البحث باسم المحافظة/المديرية
            $workers = $this->workerService->filterWorkersByLocation($provinceName, $districtName);
            $searchType = 'location_name';
        }
        elseif ($provinceId || $districtId) {
            // البحث بـ ID المحافظة/المديرية
            $workers = $this->workerService->filterWorkersByLocationId($provinceId, $districtId);
            $searchType = 'location_id';
        }
       
        else {
            // إرجاع جميع الحرفيين
            $workers = $this->workerService->getAll();
            $searchType = 'all';
        }

        return response()->json([
            'success' => true,
            'message' => 'تم العثور على ' . count($workers) . ' حرفي',
            'data' => $workers,
            'search_type' => $searchType,
            'filters_applied' => [
                'province_name' => $provinceName,
                'district_name' => $districtName,
                'province_id' => $provinceId,
                'district_id' => $districtId,
                'latitude' => $userLat,
                'longitude' => $userLng,
                'radius_km' => $radius,
                'search_term' => $searchTerm,
                'service_id' => $filters['service_id'] ?? null,
                'min_experience' => $filters['min_experience'] ?? null
            ]
        ]);
    }

 
}
