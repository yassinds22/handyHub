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
   return $this->serviceRequsetRepository->getAll();


   
}


    public function saveServiceRequse(array $data, $image1 = null) {
        $worker = $this->serviceRequsetRepository->storeServiceRequset($data);
        $this->uploadImage($worker, $image1);
        return $worker;
    }

    public function updateServiceRequest($id, array $data, $mages_url = null) {
        $serviceRequest = $this->serviceRequsetRepository->updateServiceRequset($id, $data); // تصحيح: تغيير $brand إلى $worker
        $this->uploadImage($serviceRequest, $mages_url);
        return $serviceRequest->fresh();
    }

  public function getById($id) {
    $worker = $this->serviceRequsetRepository->find($id);

   
    return $worker;
}


    public function deleteServiceRequest($id) {
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