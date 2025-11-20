<?php
namespace App\Repository;

use App\Models\worker;


class workerRepository{ // تصحيح اسم الكلاس

    public $worker;

    public function __construct(Worker $worker) {
        $this->worker = $worker; // تصحيح: يجب أن يكون $this->worker بدون $
    }

    public function storeWorker(array $data) {
        return $this->worker->create($data);
    }

    public function updateWorker($id, array $data) {
        $worker = $this->worker->findOrFail($id);
        $worker->update($data);
        return $worker;
    }

    public function all() {
        return $this->worker->with(['province', 'district', 'service', 'user'])->get();
    }

    public function find($id) {
        return $this->worker->with(['province', 'district', 'service', 'user'])->find($id);
    }

    public function deleteWorker($id) {
        $worker = $this->worker->findOrFail($id); // تصحيح: تغيير $province إلى $worker
        $worker->delete();
        return true;
    }



     // 🔍 البحث حسب المحافظة والمديرية
    public function filterByLocation($provinceName = null, $districtName = null)
    {
        $query = $this->worker->with(['province', 'district', 'service', 'user']);

        if ($provinceName) {
            $query->whereHas('province', function($q) use ($provinceName) {
                $q->where('name', 'LIKE', '%' . $provinceName . '%');
            });
        }

        if ($districtName) {
            $query->whereHas('district', function($q) use ($districtName) {
                $q->where('name', 'LIKE', '%' . $districtName . '%');
            });
        }

        return $query->get();
    }

    // 🔍 البحث حسب ID المحافظة والمديرية
    public function filterByLocationId($provinceId = null, $districtId = null)
    {
        $query = $this->worker->with(['province', 'district', 'service', 'user']);

        if ($provinceId) {
            $query->where('province_id', $provinceId);
        }

        if ($districtId) {
            $query->where('district_id', $districtId);
        }

        return $query->get();
    }

}