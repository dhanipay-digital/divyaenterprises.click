<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Libraries\MPlanClass;
use Illuminate\Http\Request;

class FetchController extends Controller
{
    public function fetch_operator(Request $request,$category){
        $mobile = $request->mobile;
        if($mobile == null){
            return ['status'=>false,'message'=>'All Field Is mandatory'];
        }
        switch ($category) {
            case 'prepaid':
                    $mplanObj = new MPlanClass();
                    $operator = $mplanObj->get_operator_info($mobile);
                    return $operator;
                break;
            default:
               abort(404,'Category not Found'.$category);
                break;
        }
    }
    public function fetch_plans(Request $request,$category){
        $circle = $request->circle;
        $operator = $request->operator;
        if($circle == null || $operator == null){
            return ['status'=>false,'message'=>'All Field Is mandatory'];
        }
        switch ($category) {
            case 'prepaid':
                    $mplanObj = new MPlanClass();
                    $plans = $mplanObj->get_prepaid_plans($circle,$operator);
                    return $plans;
                break;
            default:
               abort(404,'Category not Found'.$category);
                break;
        }
    }
}
