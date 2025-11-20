<?php  
namespace App\Repository;

use App\Models\Province;

class ProvinceRepository{

       public $province;
    public function __construct(Province $province){
        $this->province=$province;
    }
    public function storeProvince(array $data){
        return $this->province->create($data);
    }
    

     public function all(){
        return $this->province->all();

     }
    public function find($id){
         return $this->province->findOrFail($id);
    }

        public function updateProvince(array $data, $id)
    {
        $province = $this->province->findOrFail($id);

        $province->update([
            'name' => $data['name'] ?? $province->name,
            'parent_id' => $data['parent_id'] ?? 0,
        ]);

        return $province->fresh(); // لإرجاع البيانات بعد التحديث مباشرة
    }

   public function deleteProvince($id)
{
    $province =$this->province->findOrFail($id);
    $province->delete();
    return true; // ترجع true إذا الحذف تم بنجاح
}




    // ----------------------------
    // 🌟 الفلترة هنا
    // ----------------------------

    /** جلب المحافظات الرئيسية فقط */
    public function getMainProvinces()
    {
        return $this->province->where('parent_id', 0)->orderBy('name')->get();
    }

    /** جلب المديريات حسب المحافظة */
    public function getDistrictsByProvince($provinceId)
    {
        return $this->province->where('parent_id', $provinceId)->orderBy('name')->get();
    }


}