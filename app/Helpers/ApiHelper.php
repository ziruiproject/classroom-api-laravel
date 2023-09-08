<?php

namespace App\Helpers\ApiHelper;

use Exception;

class ApiHelper
{
    public static function formatApi($data)
    {
        try {
            if (!$data) {
                return json_encode([
                    'status' => 404,
                    'message' => 'Data not found'
                ]);
            }
            return json_encode([
                'status' => 200,
                'message' => 'Succeess',
                'data' => $data
            ]);
        } catch (Exception) {
            return json_encode([
                'status' => 500,
                'message' => 'An error occured'
            ]);
        }
    }
}
