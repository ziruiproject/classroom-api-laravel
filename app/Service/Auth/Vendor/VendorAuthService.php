<?php

namespace App\Service\Auth\Vendor;

use Illuminate\Http\Request;

interface VendorAuthService
{
    public function joinVendor();
    public function leaveVendor();
}
