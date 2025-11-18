<?php
namespace App\Repository;

use App\Models\Service;

class ServiceTypeRepository{ // تصحيح اسم الكلاس

    public $service ;

    public function __construct(Service  $service) {
        $this->service  = $service ; // تصحيح: يجب أن يكون $this->service  بدون $
    }

    public function storeService (array $data) {
        return $this->service ->create($data);
    }

    public function updateService ($id, array $data) {
        $service  = $this->service ->findOrFail($id);
        $service ->update($data);
        return $service ;
    }

    public function all() {
        return $this->service ->all();
    }

    public function find($id) {
        return $this->service ->findOrFail($id);
    }

    public function deleteservice ($id) {
        $service  = $this->service ->findOrFail($id); // تصحيح: تغيير $province إلى $service 
        $service ->delete();
        return true;
    }
}