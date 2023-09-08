<?php

namespace App\Service\Auth\Vendor;

use Illuminate\Http\Request;
use App\Repository\Vendor\VendorRepositoryImplementation;
use Illuminate\Support\Facades\Auth;

class VendorAuthServiceImplementation implements VendorAuthService
{

    protected $vendor;

    public function __construct(VendorRepositoryImplementation $vendor)
    {
        $this->vendor = $vendor;
    }

    public function joinVendor()
    {
        return $this->vendor->createVendor(Auth::user()->id);
    }

    public function leaveVendor()
    {
        return $this->vendor->deleteVendor(Auth::user()->id);
    }
}
