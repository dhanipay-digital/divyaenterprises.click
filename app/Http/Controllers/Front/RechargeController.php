<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RechargeController extends Controller
{
    public function recharge(Request $request, $service_type)
    {
        $service_type = strtolower($service_type);
        switch ($service_type) {
            case $service_type:
                try {
                    return view('front.recharge.' . $service_type);
                    break;
                } catch (\Throwable $th) {
                    abort(404, 'Recharge Template Not Found');
                }

            default:
                abort(404, 'Serice not found');
                break;
        }
    }
    public function recharge_submit(Request $request, $service_type)
    {
        print_r($_POST);
    }
}
