<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ProvinceService;
use Illuminate\Http\Request;

class ProviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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


}
