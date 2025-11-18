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

    if (!$worker) {
        return null;
    }

    // جلب رابط الصورة الرئيسية والصورة الفرعية (إن وجدت)
    $worker->main_image_url = $worker->getFirstMediaUrl('mages_url');
    $worker->sub_image_url  = $worker->getFirstMediaUrl('sub_image');

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
            $worker->addMedia($mages_url)->toMediaCollection('main_image');
        }

       
    }
}