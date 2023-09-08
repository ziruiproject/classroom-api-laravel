<?php

namespace App\Repository\Vendor;

use App\Models\Vendor;
use Illuminate\Support\Facades\DB;

class VendorRepositoryImplementation implements VendorRepository
{
    public function createVendor(string $id)
    {
        return Vendor::create(['user_id' => $id]);
    }

    public function getVendors()
    {
        return Vendor::all();
    }

    public function getVendorById(string $id)
    {
        return DB::table('vendors')->where('user_id', '=', $id);
    }

    public function deleteVendor(string $id)
    {
        return $this->getVendorById($id)->delete();
    }
}
