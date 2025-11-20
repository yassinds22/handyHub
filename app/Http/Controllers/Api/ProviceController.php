<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ProvinceService;
use Illuminate\Http\Request;

class ProviceController extends Controller
{
    /**
     * @var ProvinceService
     */
    protected $provinceService;

    public function __construct(ProvinceService $provinceService)
    {
        $this->provinceService = $provinceService;
    }

    /**
     * @group Provinces
     * Get a list of all provinces
     *
     * Returns all provinces including id, name, and parent_id.
     *
     * @response 200 scenario="Success" {
     *   "success": true,
     *   "data": [
     *     {
     *       "id": 1,
     *       "name": "Sana'a",
     *       "parent_id": 0,
     *       "created_at": "2025-10-13T14:36:35.000000Z",
     *       "updated_at": "2025-10-13T14:36:35.000000Z"
     *     },
     *     {
     *       "id": 2,
     *       "name": "Aden",
     *       "parent_id": 0,
     *       "created_at": "2025-10-13T14:36:35.000000Z",
     *       "updated_at": "2025-10-13T14:36:35.000000Z"
     *     }
     *   ]
     * }
     */
    public function index()
    {
        $provinces = $this->provinceService->getAll();

        return response()->json([
            'success' => true,
            'data' => $provinces
        ]);
    }
}
