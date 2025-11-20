<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProvinceRequest;
use App\Services\ProvinceService;


/**
 * @group Provinces Management
 *
 * APIs for managing provinces in the system.
 */
class ProvinceController extends Controller
{
    protected $provinceService;

    public function __construct(ProvinceService $provinceService)
    {
        $this->provinceService = $provinceService;
    }

    /**
     * Get a list of all provinces.
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id": 1,
     *       "name": "Sana'a",
     *       "parent_id": 0,
     *       "created_at": "2025-10-13T14:36:35.000000Z",
     *       "updated_at": "2025-10-13T14:36:35.000000Z"
     *     }
     *   ]
     * }
     */
    public function index()
    {
        return $this->provinceService->getAll();
    }
    public function store(StoreProvinceRequest $request){
         return $this->provinceService->saveProvince($request->validated());

    }
    public function show($id)
{
    return $this->provinceService->getById($id);
}
public function edit($id){
    $data=$this->provinceService->getById($id);
    return view('',compact('data'));
}

public function upadte(StoreProvinceRequest $request ,$id){
    return $this->provinceService->updateProvince($id,$request->validated());
}
  
public function destory($id){
 return $this->provinceService->deleteProvinceById($id);
}


  


}
