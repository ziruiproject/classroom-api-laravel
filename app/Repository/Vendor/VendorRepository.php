<?php

namespace App\Repository\Vendor;

interface VendorRepository
{
    public function createVendor(string $id);
    public function deleteVendor(string $id);
    public function getVendors();
    public function getVendorById(string $id);
}
