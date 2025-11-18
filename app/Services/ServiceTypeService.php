<?php
namespace App\Services;

use App\Models\Service;
use App\Models\serviceType;
use App\Repository\ServiceTypeRepository;

class ServiceTypeService {
    public $serviceTypeRepository;

    public function __construct(ServiceTypeRepository $serviceTypeRepository) {
        $this->serviceTypeRepository = $serviceTypeRepository;
    }

   public function getAll() {
    $serviceType = $this->serviceTypeRepository->all();

 

    return $serviceType;
}


    public function saveserviceType(array $data, $image1 = null) {
        $serviceType = $this->serviceTypeRepository->storeService($data);
        $this->uploadImage($serviceType, $image1);
        return $serviceType;
    }

    public function updateserviceType($id, array $data, $mages_url = null) {
        $serviceType = $this->serviceTypeRepository->updateService($id, $data); // تصحيح: تغيير $brand إلى $serviceType
        $this->uploadImage($serviceType, $mages_url);
        return $serviceType->fresh();
    }

  public function getById($id) {
    $serviceType = $this->serviceTypeRepository->find($id);

    return $serviceType;
}


    public function deleteserviceTypeById($id) {
        return $this->serviceTypeRepository->deleteservice($id);
    }

    protected function uploadImage(Service $service, $mages_url = null) {
        if ($mages_url) {
            if ($service->hasMedia('mages_url')) {
                $service->clearMediaCollection('mages_url');
            }
            $service->addMedia($mages_url)->toMediaCollection('main_image');
        }

       
    }
}