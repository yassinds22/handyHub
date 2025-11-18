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
        return $this->worker->all();
    }

    public function find($id) {
        return $this->worker->findOrFail($id);
    }

    public function deleteWorker($id) {
        $worker = $this->worker->findOrFail($id); // تصحيح: تغيير $province إلى $worker
        $worker->delete();
        return true;
    }
}