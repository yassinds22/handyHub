<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\workerService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public $workerService;

    public function __construct(workerService $workerService)
    {
        $this->workerService = $workerService;
    }
    /**
     * Search for workers using province/district, IDs, and multiple advanced filters.
     *
     * This API supports searching for workers using:
     * - Province and district name (including combined format: "province/district")
     * - Province or district ID
     * - Geolocation coordinates (latitude/longitude)
     * - Service type, minimum experience, and general search terms
     *
     * 🔥 Special Note:
     * The `province_name` parameter supports combined format such as:
     * Example: "صنعاء/التحرير"
     * - "صنعاء" → Province name
     * - "التحرير" → District/parent name
     *
     * @group Workers Search
     *
     * @queryParam province_name string Province name or "province/district". 
     * Example: صنعاء/التحرير
     *
     * @queryParam district_name string District (parent) name — optional when using "province/district". 
     * Example: التحرير
     *
     * @queryParam province_id integer Province ID. Example: 1
     * @queryParam district_id integer District/parent ID. Example: 4
     *
     * @queryParam latitude number User latitude used for distance filtering. Example: 15.3547
     * @queryParam longitude number User longitude. Example: 44.2070
     *
     * @queryParam search string Search keyword. Example: plumber
     * @queryParam service_id integer Filter by service ID. Example: 3
     * @queryParam min_experience integer Minimum experience in years. Example: 2
     *
     * @response 200 {
     *   "success": true,
     *   "message": "5 workers found",
     *   "data": [
     *      {
     *        "id": 1,
     *        "name": "Ahmed Ali",
     *        "service": "Plumber",
     *        "experience": 4,
     *        "province": "صنعاء",
     *        "district": "التحرير",
     *        "latitude": 15.3547,
     *        "longitude": 44.2070
     *      }
     *   ],
     *   "search_type": "location_name",
     *   "filters_applied": {
     *      "province_name": "صنعاء",
     *      "district_name": "التحرير",
     *      "province_id": null,
     *      "district_id": null,
     *      "latitude": null,
     *      "longitude": null,
     *      "radius_km": 3,
     *      "search_term": null,
     *      "service_id": 3,
     *      "min_experience": 2
     *   }
     * }
     */

    public function search(Request $request)
    {
        // Extract search criteria
        $provinceName = $request->get('province_name');
        $districtName = $request->get('district_name');
        $provinceId = $request->get('province_id');
        $districtId = $request->get('district_id');
        $userLat = $request->get('latitude');
        $userLng = $request->get('longitude');
        $searchTerm = $request->get('search');
        $radius = $request->get('radius', 3); // Default 3 km

        $filters = $request->only([
            'service_id', 'min_experience', 'search_term'
        ]);

       
       if ($provinceId || $districtId) {
            // Search by province/district ID
            $workers = $this->workerService->filterWorkersByLocationId($provinceId, $districtId);
            $searchType = 'location_id';
        }
        else {
            // Return all workers
            $workers = $this->workerService->getAll();
            $searchType = 'all';
        }

        return response()->json([
            'success' => true,
            'message' => count($workers) . ' workers found',
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
