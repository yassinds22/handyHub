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
     * @group Search
     * Search workers
     *
     * This endpoint allows searching workers using multiple filters such as:
     * province name, district name, province ID, district ID, keywords, service type, experience, and distance.
     *
     * @queryParam province_name string The name of the province for filtering. Example: Sana'a
     * @queryParam district_name string The name of the district for filtering. Example: Al-Tahrir
     * @queryParam province_id integer The ID of the province. Example: 3
     * @queryParam district_id integer The ID of the district. Example: 12
     * @queryParam latitude number User latitude for distance filtering. Example: 15.3694
     * @queryParam longitude number User longitude for distance filtering. Example: 44.1910
     * @queryParam radius integer Search radius in KM (default: 3). Example: 5
     * @queryParam search string General search term (worker name/bio)
     * @queryParam service_id integer Filter workers by service ID. Example: 4
     * @queryParam min_experience integer Minimum years of experience. Example: 2
     *
     * @response 200 scenario="Success" {
     *   "success": true,
     *   "message": "تم العثور على 3 حرفي",
     *   "data": [
     *     {
     *       "worker_id": 1,
     *       "service_id": 4,
     *       "experience_years": 3,
     *       "bio": "Expert electrician",
     *       "province_id": 3,
     *       "latitude": "15.369",
     *       "longitude": "44.191",
     *       "status": "available",
     *       "image": "http://example.com/storage/workers/1.png"
     *     }
     *   ],
     *   "search_type": "location_name",
     *   "filters_applied": {
     *     "province_name": "Sana'a",
     *     "district_name": "Al-Tahrir",
     *     "province_id": null,
     *     "district_id": null,
     *     "latitude": "15.3694",
     *     "longitude": "44.1910",
     *     "radius_km": 3,
     *     "search_term": "electric",
     *     "service_id": 4,
     *     "min_experience": 2
     *   }
     * }
     */
    public function search(Request $request)
    {
        // Extract filters
        $provinceName = $request->get('province_name');
        $districtName = $request->get('district_name');
        $provinceId = $request->get('province_id');
        $districtId = $request->get('district_id');
        $userLat = $request->get('latitude');
        $userLng = $request->get('longitude');
        $searchTerm = $request->get('search');
        $radius = $request->get('radius', 3);

        $filters = $request->only([
            'service_id', 'min_experience', 'search_term'
        ]);

        // Determine search type
        if ($provinceName || $districtName) {
            $workers = $this->workerService->filterWorkersByLocation($provinceName, $districtName);
            $searchType = 'location_name';
        }
        elseif ($provinceId || $districtId) {
            $workers = $this->workerService->filterWorkersByLocationId($provinceId, $districtId);
            $searchType = 'location_id';
        }
        else {
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
