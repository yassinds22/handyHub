<?php
namespace App\Repository;

use App\Models\ServiceRequest;



class ServiceRequsetRepository{ // تصحيح اسم الكلاس

    public $serviceRequest;

    public function __construct(ServiceRequest $serviceRequest) {
        $this->serviceRequest = $serviceRequest; // تصحيح: يجب أن يكون $this->serviceRequest بدون $
    }

    public function storeServiceRequset(array $data) {
        return $this->serviceRequest->create($data);
    }

    public function updateServiceRequset($id, array $data) {
        $serviceRequest = $this->serviceRequest->findOrFail($id);
        $serviceRequest->update($data);
        return $serviceRequest;
    }

    public function all() {
        return $this->serviceRequest->all();
    }

    public function find($id) {
        return $this->serviceRequest->findOrFail($id);
    }

    public function deleteServiceRequset($id) {
        $serviceRequest = $this->serviceRequest->findOrFail($id); // تصحيح: تغيير $province إلى $serviceRequest
        $serviceRequest->delete();
        return true;
    }
}