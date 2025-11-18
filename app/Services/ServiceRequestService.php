<?php
namespace App\Services;

use App\Models\ServiceRequest;
use App\Repository\ServiceRequsetRepository;


class ServiceRequestService {
    public $serviceRequsetRepository;

    public function __construct(ServiceRequsetRepository $serviceRequsetRepository ) {
        $this->serviceRequsetRepository = $serviceRequsetRepository;
    }

   public function getAll() {
    $workers = $this->serviceRequsetRepository->all();


    return $workers;
}


    public function saveServiceRequse(array $data, $image1 = null) {
        $worker = $this->serviceRequsetRepository->storeServiceRequset($data);
        $this->uploadImage($worker, $image1);
        return $worker;
    }

    public function updateWorker($id, array $data, $mages_url = null) {
        $worker = $this->serviceRequsetRepository->updateServiceRequset($id, $data); // تصحيح: تغيير $brand إلى $worker
        $this->uploadImage($worker, $mages_url);
        return $worker->fresh();
    }

  public function getById($id) {
    $worker = $this->serviceRequsetRepository->find($id);

    if (!$worker) {
        return null;
    }

    // جلب رابط الصورة الرئيسية والصورة الفرعية (إن وجدت)
    $worker->main_image_url = $worker->getFirstMediaUrl('mages_url');
    $worker->sub_image_url  = $worker->getFirstMediaUrl('sub_image');

    return $worker;
}


    public function deleteWorkerById($id) {
        return $this->serviceRequsetRepository->deleteServiceRequset($id);
    }

    protected function uploadImage(ServiceRequest $serviceRequest, $image_service_request = null) {
        if ($image_service_request) {
            if ($serviceRequest->hasMedia('image_service_request')) {
                $serviceRequest->clearMediaCollection('image_service_request');
            }
            $serviceRequest->addMedia($image_service_request)->toMediaCollection('image_service_request');
        }

       
    }
}