<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\Auth\Vendor\VendorAuthServiceImplementation;

class VendorAuthController extends Controller
{
    protected $vendor;

    public function __construct(VendorAuthServiceImplementation $vendor)
    {
        $this->vendor = $vendor;
    }

    public function join()
    {
        return response()->json($this->vendor->joinVendor());
    }

    public function leave()
    {
        return response()->json($this->vendor->leaveVendor());
    }
}
