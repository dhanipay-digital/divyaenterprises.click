<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Http;

class MPlanClass
{
    public function get_api_key(): string
    {
        // $api_key = "306e017248f5ad08c7dfcad865897610";
        $api_key = "fa2d51e822d36ca48591649c72309f56";
        return $api_key;
    }

    public function handle(string $url, array $params)
    {
        $api_key = $this->get_api_key();
        $params['apikey'] = $api_key;
        $paramsString = http_build_query($params);
        $full_url =  $url . "?" . $paramsString;
        $send_request = Http::get($full_url);
        $res_status = $send_request->status();
        $res_body = $send_request->body();
        if ($res_status == 200) {
            $response =  ['status' => true, 'api_data' => $res_body];
        } else {
            $response =  ['status' => false, 'message' => $res_body];
        }
        return $response;
    }

    public function get_operator_info(string $number): array
    {
        $uri = "http://operatorcheck.mplan.in/api/operatorinfo.php";
        $params = ['tel' => $number];
        $response = array();
        $fetch_api_res = $this->handle($uri, $params);
        if ($fetch_api_res['status'] == true) {
            $api_data = json_decode($fetch_api_res['api_data']);
            print_r($api_data);exit;
            if ($api_data->records->status) {
                $operator = $api_data->records->Operator;
                $rech_type = $api_data->records->segment;
                $circle = $api_data->records->circle;
                $response['status'] = true;
                $response['data'] = ['operator' => $operator, 'rech_type' => $rech_type, 'circle' => $circle];
            } else {
                $response['status'] = false;
                $response['data'] = [];
            }
        }
        return $response;
    }

    public function get_prepaid_plans(string $circle, string $operator)
    {
        $uri = "https://www.mplan.in/api/plans.php";
        $params = ['cricle' => $circle, 'operator' => $operator];
        $response = array();
        $fetch_api_res = $this->handle($uri, $params);
        if ($fetch_api_res['status'] == true) {
            $api_data = json_decode($fetch_api_res['api_data']);
            if ($api_data->status) {
                $plans = $api_data->records;
                $response['status'] = true;
                $response['data'] = $plans;
            } else {
                $response['status'] = false;
                $response['data'] = [];
            }
        }
        return $response;
    }
}
