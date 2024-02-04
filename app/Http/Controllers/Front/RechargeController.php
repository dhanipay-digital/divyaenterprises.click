<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Libraries\MPlanClass;
use App\Libraries\OperatorClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class RechargeController extends Controller
{
    public function recharge(Request $request, $category)
    {
        $category = strtolower($category);
        switch ($category) {
            case $category:
                try {
                    $operatorObj = new OperatorClass();
                    $operator_list = $operatorObj->get_operators($category);
                    return view('front.recharge.' . $category,compact('operator_list'));
                    break;
                } catch (\Throwable $th) {
                    abort(404, 'Recharge Template Not Found');
                }

            default:
                abort(404, 'Serice not found');
                break;
        }
    }
    public function recharge_submit(Request $request, $category)
    {
        print_r([ $request->all(), $category]);
        // $number = "9625442725";
        // $mplanObj = new MPlanClass();
        // $res  = $mplanObj->get_operator_info($number);
        // $res  = $mplanObj->get_plans("Delhi NCR","Jio");
        // echo "<pre>";
        // print_r($res);
        // $api = "fa2d51e822d36ca48591649c72309f56";
        //     $api = "306e017248f5ad08c7dfcad865897610";
        //    echo  $url = "http://operatorcheck.mplan.in/api/operatorinfo.php?apikey=$api&tel=9625442725";
        //     $res = Http::get($url);
        //     echo "<pre>";
        //     var_dump($res->body());
        //     print_r($_POST);
        // print_r($_POST);
        // https://www.mplan.in/api/plans.php?apikey=[yourapikey]&cricle=[Gujarat](given below)&operator=[operator](BSNL,Idea,given below)

    }
}
