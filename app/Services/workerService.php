<?php
namespace App\Services;

use App\Models\worker;
use App\Repository\workerRepository;

class workerService {
    public $workerRepository;

    public function __construct(workerRepository $workerRepository) {
        $this->workerRepository = $workerRepository;
    }

   public function getAll() {
    $workers = $this->workerRepository->all();

    // أضف روابط الصور لكل منتج
    $workers->each(function($worker) {
        $worker->main_image_url = $worker->getFirstMediaUrl('main_image');
        $worker->sub_image_url  = $worker->getFirstMediaUrl('sub_image');
    });

    return $workers;
}


    public function saveWorker(array $data, $image1 = null) {
        $worker = $this->workerRepository->storeWorker($data);
        $this->uploadImage($worker, $image1);
        return $worker;
    }

    public function updateWorker($id, array $data, $mages_url = null) {
        $worker = $this->workerRepository->updateWorker($id, $data); // تصحيح: تغيير $brand إلى $worker
        $this->uploadImage($worker, $mages_url);
        return $worker->fresh();
    }

  public function getById($id) {
    $worker = $this->workerRepository->find($id);



    return $worker;
}


    public function deleteWorkerById($id) {
        return $this->workerRepository->deleteWorker($id);
    }

    protected function uploadImage(worker $worker, $mages_url = null) {
        if ($mages_url) {
            if ($worker->hasMedia('mages_url')) {
                $worker->clearMediaCollection('mages_url');
            }
            $worker->addMedia($mages_url)->toMediaCollection('mages_url');
        }

       
    }




    // 🔍 البحث حسب الموقع (اسم المحافظة/المديرية)
    public function filterWorkersByLocation($provinceName = null, $districtName = null)
    {
        $workers = $this->workerRepository->filterByLocation($provinceName, $districtName);
        return $this->formatWorkersResponse($workers);
    }

    // 🔍 البحث حسب ID الموقع
    public function filterWorkersByLocationId($provinceId = null, $districtId = null)
    {
        $workers = $this->workerRepository->filterByLocationId($provinceId, $districtId);
        return $this->formatWorkersResponse($workers);
    }



     private function formatWorkersResponse($workers)
    {
        return $workers->map(function ($worker) {
            $formatted = [
                'worker_id' => $worker->id,
                'service_id' => $worker->service_id,
                'service_name' => $worker->service->name ?? 'غير محدد',
                'experience_years' => $worker->experience_years,
                'bio' => $worker->bio,
                'province_id' => $worker->province_id,
                'province_name' => $worker->province->name ?? 'غير محدد',
                'district_id' => $worker->district_id,
                'district_name' => $worker->district->name ?? 'غير محدد',
                'latitude' => $worker->latitude,
                'longitude' => $worker->longitude,
                'execution_date' => $worker->execution_date,
                'status' => $worker->status,
                'user_id' => $worker->user_id,
                'user_name' => $worker->user->name ?? 'غير معروف',
                'user_phone' => $worker->user->phone ?? 'غير متوفر',
                'rating' => $worker->rating ?? 0,
                'image'       => $worker->getFirstMedia('mages_url')?->getUrl(),
            ];

            // إضافة المسافة إذا كانت موجودة
            if (isset($worker->distance)) {
                $formatted['distance_km'] = round($worker->distance, 2);
                $formatted['distance_text'] = $this->formatDistance($worker->distance);
            }

            return $formatted;
        });
    }

    private function formatDistance($distanceKm)
    {
        if ($distanceKm < 1) {
            return round($distanceKm * 1000) . ' متر';
        }
        return round($distanceKm, 1) . ' كم';
    }
}