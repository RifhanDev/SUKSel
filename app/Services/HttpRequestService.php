<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HttpRequestService
{
    protected $cname;

    public function __construct(Team $teamModel)
    {
        $this->class_name = 'HttpRequestService';
    }

    public function request($method, $url, $data = [], $headers = [], $type = 'http')
    {
        try {
            $response = $type === 'curl' 
                ? $this->curlRequest($method, $url, $data, $headers) 
                : $this->httpClientRequest($method, $url, $data, $headers);

            Log::info("Request Successful | Type: $type | Method: $method | URL: $url", [
                'data' => $data,
                'response' => $response
            ]);

            return $response;

        } catch (\Exception $e) {
            Log::error($this->class_name.'->'.__FUNCTION__.' | Line : '.$th->getLine().' | Message : '.$th->getMessage().' | File : '.$th->getFile());

            Log::error("Request Failed | Type: $type | Method: $method | URL: $url", [
                'data' => $data,
                'error' => $e->getMessage()
            ]);

            return [
                'error' => true,
                'message' => $e->getMessage()
            ];
        }
    }

    private function httpClientRequest($method, $url, $data = [], $headers = [])
    {
        $response = Http::withHeaders($headers)->{$method}($url, $data);

        return $response->json();
    }

    private function curlRequest($method, $url, $data = [], $headers = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        if (!empty($data) && in_array(strtoupper($method), ['POST', 'PUT', 'PATCH'])) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }

        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) {
            throw new \Exception("cURL Error: " . $error);
        }

        return json_decode($response, true);
    }
}
