<?php 
namespace App\Services;

use App\Models\Province;
use App\Repository\ProvinceRepository;
use GuzzleHttp\Promise\Create;

class ProvinceService{
    public $provinceRepository;
    public function __construct(ProvinceRepository $provinceRepository){
        $this->provinceRepository=$provinceRepository;

    }
    public function getAll(){
        return $this->provinceRepository->all();
    }
    public function saveProvince(array $data){
          $province=$this->provinceRepository->storeProvince( $data);
          return $province;
    }
     public function updateProvince($id, array $data)
    {
        return $this->provinceRepository->updateProvince($data, $id);
    }
     public function getById($id){
        return $this->provinceRepository->find($id);
    }

    public function deleteProvinceById($id)
{
    return $this->provinceRepository->deleteProvince($id);
}




    // ------------------------------------
    // 🌟 دوال الفلترة الجديدة
    // ------------------------------------

    /** جلب المحافظات الرئيسية */
    public function getMainProvinces()
    {
        return $this->provinceRepository->getMainProvinces();
    }

    /** جلب المديريات لمحافظة محددة */
    public function getDistricts($provinceId)
    {
        return $this->provinceRepository->getDistrictsByProvince($provinceId);
    }

}